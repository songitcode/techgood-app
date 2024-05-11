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
            'email' => 'example@example.com',
            'password' => Hash::make('123456'),
            'birthday' => '1990-01-01',
            'photo' => null,
        ]);
    }
}
