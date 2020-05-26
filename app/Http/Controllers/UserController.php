<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
    public function __construct() {
        $this->middleware('can:isUser');
    }

    public function index() {
        return view('user');
    }
}
