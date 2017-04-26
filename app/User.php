<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['name'];
    protected $hidden = ['password'];

    function return_all(){
        print('wtf');
    }
}

// we use the user model to work with with eloquent to put data into our database
// we use migrations to make db and do changes and what not
// to input seed data, we would need the model