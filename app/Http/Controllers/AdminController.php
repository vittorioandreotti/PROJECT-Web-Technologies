<?php

namespace App\Http\Controllers;

use App\Http\Requests\insertStaffRequest;
use App\Models\Staff;
use App\Models\User;

class AdminController extends Controller {

    

    public function __construct() {
        $this->middleware('can:isAdmin');
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
    
    public function manageStaff() {
        $staffs = User::where('role', "staff")->get();
        return view('manageStaff')
               ->with('staffs', $staffs);
    }
    
    public function addStaff() {
        return view('prod.insertStaff');
    }
  
    public function storeStaff(insertStaffRequest $request) {

        $staff = new Staff;
        $staff->fill($request->validated());
        $staff->save();
        
        return redirect()->action('AdminController@index');
    }

}
