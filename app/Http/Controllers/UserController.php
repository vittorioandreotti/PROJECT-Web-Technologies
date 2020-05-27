<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
   protected $jobs=['Operaio','Insegnante','Ingegnere','Architetto']; 
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
        return view('editUser')
              ->with("jobs",$this->jobs);
        
    }
}
