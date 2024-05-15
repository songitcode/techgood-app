<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class InfoUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'sontestthu',
            'first_name' => 'Jay',
            'last_name' => 'Son',
            'email' => 'nguyenson@gmail.com',
            'password' => Hash::make('123456'),
            'birthday' => '2004-06-16',
            'photo' => 'avatars/1715775934.png',
        ]);

        DB::table('users')->insert([
            'username' => 'antestthu',
            'first_name' => 'Nguyen',
            'last_name' => 'An',
            'email' => 'nguyenan@gmail.com',
            'password' => Hash::make('123456'),
            'birthday' => '1999-01-01',
            'photo' => null,
        ]);

        DB::table('users')->insert([
            'username' => 'tintestthu',
            'first_name' => 'Tran',
            'last_name' => 'Tin',
            'email' => 'trantin@gmail.com',
            'password' => Hash::make('123456'),
            'birthday' => '1999-01-01',
            'photo' => null,
        ]);

        DB::table('users')->insert([
            'username' => 'duytestthu',
            'first_name' => 'Tran',
            'last_name' => 'Duy',
            'email' => 'tranduy@gmail.com',
            'password' => Hash::make('123456'),
            'birthday' => '1999-01-01',
            'photo' => null,
        ]);


        DB::table('users')->insert([
            'username' => 'ngantestthu',
            'first_name' => 'Kim',
            'last_name' => 'Ngan',
            'email' => 'kimngan@gmail.com',
            'password' => Hash::make('123456'),
            'birthday' => '1999-01-01',
            'photo' => null,
        ]);
    }
}
