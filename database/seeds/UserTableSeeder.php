<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Denis Suraev',
            'username' => 'admin',
            'email'    => 'any.zicky@gmial.com',
            'password' => Hash::make('123456'),
        ));
    }

}