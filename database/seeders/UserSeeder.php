<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        {
            $input ['name']     = 'Vikar Maulana Arrisyad';
            $input ['email']    = 'vikar.maulana.arrisyad@gmail.com';
            $input ['password'] = Hash::make('12345678');
            $input ['avatar']   = '/img/default.jpg';
            $input ['roles']   = '0'; //Admin
            User::create($input);
        }
        {
            $input ['name']     = 'admin';
            $input ['email']    = 'admin@gmail.com';
            $input ['password'] = Hash::make('12345678');
            $input ['avatar']   = '/img/default.jpg';
            $input ['roles']   = '1';  //User
            User::create($input);
        }

    }
}
