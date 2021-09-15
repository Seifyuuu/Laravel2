<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"le boss",
            "prenom" => "Seif",
            "age"=> 23,
            "email"=>"seif@test.com",
            "password"=>Hash::make("test")
        ]);
    }
}
