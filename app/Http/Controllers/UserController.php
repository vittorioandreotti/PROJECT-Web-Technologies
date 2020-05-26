<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        Log::info('arrivato in userController');
        return view('user');
    }
}
