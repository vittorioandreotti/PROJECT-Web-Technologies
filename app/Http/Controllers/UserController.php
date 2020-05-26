<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('can:isUser');
    }

    public function index() {
        Log::info('arrivato in userController');
        return view('user');
    }
}
