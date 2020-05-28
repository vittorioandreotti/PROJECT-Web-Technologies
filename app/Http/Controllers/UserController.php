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
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('home');
    }
    
    public function showProfile(){
        return view('profile');
    }
    
    public function editProfile(){
       $jobs=['Operaio','Insegnante','Ingegnere','Architetto']; 
        return view('editUser')
              ->with("jobs",$jobs);
    }
    
    public function storeProfile(EditProfileRequest $request) {
        $user=Auth::user();
        $user->update($request->validated());
        Log::info($request);
        Log::info($user);
        $user->save();
        return redirect()->action('UserController@showProfile');
        ;
    }
    
    public function editPassword() {
        return view('editUserPassword');
    }
    
    public function storePassword(ChangePasswordRequest $request){
        $user=Auth::user();
        $request->validate([
                            'password' => ['required', new CheckPassword],
                            'newPassword' => ['required'],
                            'newPasswordConfirm' => ['same:newPassword'],
                            ]);
       $user->update(['password'=> Hash::make($request->newPassword)]);
       $user->save();
       return redirect()->back()
                        ->with('confermPassword','Password cambiata!');

    }
}
