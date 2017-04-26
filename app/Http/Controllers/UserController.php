<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller{

    public function returnAll(){
        return User::all();
    }

    public function getUserById($id){
        return User::findOrFail($id);
    }
}


?>
