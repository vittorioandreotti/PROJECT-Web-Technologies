<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\EditProfileRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $user->homeTown=$request->get('homeTown');
        Log::info($request);
        Log::info($user);
        $user->save();
        return redirect()->action('UserController@index');
        ;
    }
    
    public function editPassword() {
        return view('editUserPassword');
    }
    
    public function storePassword(EditProfile){
        
    }
}
