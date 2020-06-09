<?php

namespace App\Models;

use App\User;

class Admin {
    
    /**
     * Preleva utente con id=$id
     * @param $id: id dell'utente 
     * @return User corrispondente a $id 
     */
    public function getUserById($id) {
       return User::where('id','=',$id)->get()->first();
    }
    
    /**
     * Preleva utenti con role=$role
     * @param $role: ruolo User
     * @return User con role=$role
     */
     public function getUserByRole($role) {
       return User::where('role','=',$role)->get();
    }
}
