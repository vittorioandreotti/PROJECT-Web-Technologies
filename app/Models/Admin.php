<?php

namespace App\Models;

use App\User;

class Admin {
    
    public function getUserById($id) {
       return User::where('id','=',$id)->get()->first();
    }
    
     public function getUserByRole($role) {
       return User::where('role','=',$role)->get();
    }
}
