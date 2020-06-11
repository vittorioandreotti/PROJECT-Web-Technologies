<?php

namespace App\Http\Controllers;

use App\Http\Requests\insertStaffRequest;
use App\Models\Staff;
use App\User;
use App\Models\Admin;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests\EditStaffRequest;
use App\Http\Requests\DeleteMultipleUserRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller {

    protected $_adminModel;
    /*Possibili occupazioni dell'utente*/
    protected $jobs=['Operaio','Insegnante','Ingegnere','Architetto']; 

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_adminModel=new Admin;
        
    }

    public function index() {
        return view('admin');
    }

   /**
    * 
    * @return vista con cui è possibile eliminare uno o più clienti
    */
    public function manageUser () {
        $users = User::where('role', "user")->get();
        return view('user.manageUser')
            ->with('users', $users);
    }
    
    /**
     * 
     * @param $id: id dell'utente che si vuole cancellare
     * @return Ritorna la stessa pagina con un messaggio di conferma contenente il nome e il cognome dell'utente eliminato
     */
    public function deleteUser($id) {
        $msg="Cancellato: ";
        $user = $this->_adminModel->getUserById($id);
        $msg=$msg . $user->name . " " . $user->surname . "\n";
        $user->delete();
        return redirect()->back()
                         ->with('confermDelete',$msg);
    }
    
    /**
     * 
     * @param DeleteMultipleUserRequest $request: valori delle checkbox selezionate corrispondenti agli utenti che si vuole eliminare
     * @return vista con cui è possibile gestire i clienti, ma con un messaggio di conferma circa gli utenti cancellati
     */
    public function deleteMultipleUser(DeleteMultipleUserRequest $request) {
        /*Estrae ogni prodotto in funzione del codice prodotto contenuto nell'array delle checkbox selezionate e lo elimina*/
        $msg="Cancellati: ";
        foreach ($request->input('users') as $r) {
          Log::info($r);
          $user=$this->_adminModel->getUserById($r);
          $user->delete();
          $msg=$msg . "\n \t" . $user->username . "\n";
        }
        return redirect()->back()
                        ->with('confermDelete',$msg);
    }
    
    /**
     * 
     * @return vista con cui è possibile gestire gli utenti staff
     */
    public function manageStaff() {
        $staffs = $this->_adminModel->getUserByRole("staff");
        return view('staff.manageStaff')
               ->with('staffs', $staffs);
    }
    
    /**
     * 
     * @param $id: id dello staff che si vuole modificare
     * @return vista dell'utente staff che si vuole modificare contenente i dati attuali
     */
    public function editStaff ($id){
        $staff = $this->_adminModel->getUserById($id);
         $i=null;//$i=null corrisponde alla voce "--Seleziona--" 
        if($staff->job!=null){ //se il lavoro è stato selezionato è necessario prelevare l'indice corrispondente dal vettore per poi usare nella vista
            Log::info($staff->job);
            $i=0;
            foreach($this->jobs as $job) {
                if($job!=$staff->job) {
                    $i++;
                }
                 else break;
            }
        } 
       
        return view('staff.editStaff')
            ->with('staff', $staff)
            ->with('jobs', $this->jobs)
            ->with('job', $i);
    }
    
    /**
     * 
     * @param EditStaffRequest $request: form di modifica dell'utente staff
     * @param $id: id dell'utente staff che si vuole modificare
     * @return pagina principale dell'utente admin
     */
    public function storeEditStaff (EditStaffRequest $request, $id){
        $staff = $this->_adminModel->getUserById($id);
        $staff -> update($request->validated());
        if($request->input('job')!=null) {
            $staff->job=($this->jobs[$request->input('job')]);
        }
        Log::info($request);
        Log::info($staff);
        $staff -> save();
        return response()->json(['redirect' => route('admin')]);
    }
  
    /**
     * 
     * @return vista per inserire un nuovo utente staff
     */
    public function addStaff() {
        return view('staff.insertStaff')
              ->with('jobs',$this->jobs);
        
    }
  
    /**
     * 
     * @param insertStaffRequest $request: form inserimento di un nuovo utente staff
     * @return pagina principale dell'admin
     */
    public function storeStaff(insertStaffRequest $request) {

        $staff = new User;
        $staff->role="staff";
        $staff->updated_at=date("Y-m-d H:i:s");
        $staff->created_at=date("Y-m-d H:i:s");
        $staff->fill($request->validated());
        $staff->password = Hash::make($request->password);
        Log::info($request);
        Log::info($staff);
        $staff->save();
        return response()->json(['redirect' => route('admin')]);
    }

}
