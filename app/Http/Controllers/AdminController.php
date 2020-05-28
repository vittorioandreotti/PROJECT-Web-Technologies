<?php

namespace App\Http\Controllers;

use App\Http\Requests\insertStaffRequest;
use App\Models\Staff;
use App\Models\User;
use App\Http\Requests\EditProfileRequest;
use Illuminate\Support\Facades\Log;

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
    
    public function deleteUser($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('manageUser');
    }
    
    public function manageStaff() {
        $staffs = User::where('role', "staff")->get();
        return view('manageStaff')
               ->with('staffs', $staffs);
    }
    
    public function editStaff ($id){
        $jobs=['Operaio','Insegnante','Ingegnere','Architetto'];
        $staff = User::where('id', "$id")->get()->first();
        return view('editStaff')
            ->with('staff', $staff)
            ->with('jobs', $jobs);
    }
    
    public function storeEditStaff (EditProfileRequest $request, $id){
        $staff = User::where('id', "$id")->get()->first();
        $staff -> update($request->validated());
        Log::info($request);
        Log::info($staff);
        $staff -> save();
        return redirect()->route('manageStaff');
    }
    
    public function deleteStaff ($id) {
        $staff = User::findOrFail($id);
        $staff->delete();
        return redirect()->route('manageStaff');
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
