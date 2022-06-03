<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'name' => 'Devin',
            'email' => "Devin@gmail.com",
            'password' => bcrypt("password"),
            'role' => 'Admin',
        ]);

        DB::table("users")->insert([
            'name' => 'Marit Kuijt',
            'email' => "Marit.voorbeeld@gmail.com",
            'password' => bcrypt("password"),
        ]);
    }
}
