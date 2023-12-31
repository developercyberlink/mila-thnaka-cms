<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'first_name'=>"Saurab",
            "last_name"=>"Kunwar",
            "email"=>"srbunitydeveloper@gmail.com",
            'password' => Hash::make('password'),
            "phone"=>"98496940654",
            "roles"=>"admin"
        ]);
    }
}
