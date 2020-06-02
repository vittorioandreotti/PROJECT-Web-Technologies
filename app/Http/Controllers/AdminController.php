<?php

namespace App\Http\Controllers;

use App\Http\Requests\insertStaffRequest;
use App\Models\Staff;
use App\User;
use App\Models\Admin;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests\DeleteMultipleUserRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller {

    protected $_adminModel;
    protected $jobs=['Operaio','Insegnante','Ingegnere','Architetto']; 

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_adminModel=new Admin;
        
    }

    public function index() {
        return view('admin');
    }

    //Gestione Utenti e Staff
    public function manageUser () {
        $users = User::where('role', "user")->get();
        return view('manageUser')
            ->with('users', $users);
    }
    
    public function deleteUser($id) {
        $msg="Cancellato: ";
        $user = $this->_adminModel->getUserById($id);
        $msg=$msg . $user->name . " " . $user->surname . "\n";
        $user->delete();
        return redirect()->back()
                         ->with('confermDelete',$msg);
    }
    
    public function manageStaff() {
        $staffs = $this->_adminModel->getUserByRole("staff");
        return view('manageStaff')
               ->with('staffs', $staffs);
    }
    
    public function editStaff ($id){
        $staff = $this->_adminModel->getUserById($id);
        return view('editStaff')
            ->with('staff', $staff)
            ->with('jobs', $this->jobs);
    }
    
    public function storeEditStaff (EditProfileRequest $request, $id){
        $staff = $this->_adminModel->getUserById($id);
        $staff -> update($request->validated());
        Log::info($request);
        Log::info($staff);
        $staff -> save();
        return redirect()->route('manageStaff');
    }
    
    /*public function deleteStaff ($id) {
        $msg="Cancellato: ";
        $staff = $this->_adminModel->getUserById($id);
        $msg=$msg . $user->name . " " . $user->surname . "\n";
        $staff->delete();
        return redirect()->route('manageStaff');
    }*/
    
    public function addStaff() {
        return view('insertStaff')
              ->with('jobs',$this->jobs);
        
    }
  
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
    
    public function deleteMultipleUser(DeleteMultipleUserRequest $request) {
        /*Estrae ogni prodotto in funzione del codice prodotto contenuto nell'array delle checkbox selezionate e lo elimina*/
        $msg="Cancellati: ";
        foreach ($request->input('users') as $r) {
          Log::info($r);
          $user=$this->_adminModel->getUserById($r);
          $user->delete();
          $msg=$msg . "\n \t" . $user->name . " " . $user->surname . "\n";
        }
        return redirect()->back()
                        ->with('confermDelete',$msg);
    }

}
