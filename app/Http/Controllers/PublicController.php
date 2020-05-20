<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    /*Costruttore*/
    public function __construct() {
        
    }
    
    public function showHome() {
        return view('home');
    }
    
}
