<?php

namespace App\Models;

use App\User;



class Admin {
    
    public function getUsers() { 
        $users = User::where('tipologiaUtente', 'user')->get();
        return $users;
    }
    
    public function getStaff() { 
        $users = User::where('tipologiaUtente', 'staff')->get();
        return $users;
    }

}
