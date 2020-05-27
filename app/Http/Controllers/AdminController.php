<?php

namespace App\Http\Controllers;

use App\Http\Requests\insertStaffRequest;
use App\Models\Staff;

class AdminController extends Controller {

    

    public function __construct() {
        $this->middleware('can:isAdmin');
    }

    public function index() {
        return view('admin');
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
