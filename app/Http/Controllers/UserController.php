<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\EditProfileRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Rules\CheckPassword;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller

{
    /**
     *
     * @var Possibili occupazione utente 
     */
    protected $jobs=['Operaio','Insegnante','Ingegnere','Architetto']; 
     
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('home');
    }
    
    /**
     * 
     * @return vista che mostra il profilo utente
     */
    public function showProfile(){
        return view('user.profile');
    }
    
    /**
     * 
     * @return vista contente i dati attuali dell'utente che lui può modificare
     */
    public function editProfile(){
       /**
        * Permette di estrarre dato il nome del lavoro il corrispondente indice usato per selezionare 
        * dall'elenco delle possibili opzioni il lavoro che svolge attualmente l'utente
        */
       $i=0;
       foreach($this->jobs as $job) {
           Log::info($job);
           if($job!=auth()->user()->job) {
               $i++;
           }
            else break;
       }
        Log::info($i);
        Log::info(array_keys($this->jobs));
         Log::info($this->jobs);
        return view('user.editUser')
              ->with("jobs",$this->jobs)
              ->with("job",$i);
    }
    
    /**
     * 
     * @param EditProfileRequest $request: form contente i valori con cui il profilo deve essere aggiornato
     * @return vista contente il profilo dell'utente con i dati aggiornati
     */
    public function storeProfile(EditProfileRequest $request) {
        $user=Auth::user();
        $user->update($request->validated());
        $user->job=($this->jobs[$request->input('job')]);
       // Log::info($user);
        $user->save();
        return response()->json(['redirect' => route('profile')]);
        
        
    }
    
    /**
     * 
     * @return pagina con cui si può modificare la password dell'utente
     */
    public function editPassword() {
        return view('user.editUserPassword');
    }
    
    
    /**
     * 
     * @param ChangePasswordRequest $request: contenuto della form per il cambio della password
     * @return ritorna la stessa pagina dove l'utente ha modificato il profilo con un messaggio di conferma
     */
    public function storePassword(ChangePasswordRequest $request){
        $user=Auth::user();
        $request->validate([
                            'password' => ['required', new CheckPassword],
                            'newPassword' => ['required'],
                            'newPasswordConfirm' => ['same:newPassword'],
                            ]);
       $user->update(['password'=> Hash::make($request->newPassword)]);
       $user->save();
       return redirect()->route('profile')
                        ->with('confermMessage','Password cambiata con successo!');

    }
}
