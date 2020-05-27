<?php

namespace App\Http\Controllers;



class AdminController extends Controller {

    protected $_adminModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
    }

    public function index() {
        return view('admin');
    }

    
    
}
