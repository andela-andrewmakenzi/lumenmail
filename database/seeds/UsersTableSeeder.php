<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'john',
            'password' => 'john'
        ]);
        User::create([
            'username' => 'jane',
            'password' => 'jane'
        ]);
        User::create([
            'username' => 'success',
            'password' => 'hirogato'
        ]);                
    }
}
