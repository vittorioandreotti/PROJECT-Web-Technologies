<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('can:isAdmin');
    }

    public function index() {
        return view('admin');
    }
    
    public function manageUser () {
        $users = User::where('role', "user")->get();
        return view('manageUser')
            ->with('users', $users);
    }
    
    public function manageStaff () {
        
    }
}
