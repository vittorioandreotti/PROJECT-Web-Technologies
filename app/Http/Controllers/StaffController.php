<?php

namespace App\Http\Controllers;


class StaffController extends Controller
{
    
    public function __construct() {
        $this->middleware('can:isStaff');
    }

    public function index() {
        return view('staff');
    }
}
