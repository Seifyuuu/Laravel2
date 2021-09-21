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
        DB::table('users')->insert([[
            "name"=>"admin",
            "email"=>"admin@admin.com",
            "password"=>Hash::make("admin123"),
            "role_id"=>1,
        ],
        [
            "name"=>"membre",
            "email"=>"membre@membre.com",
            "password"=>Hash::make("membre123"),
            "role_id"=>2,
        ],
        [
            "name"=>"boloss",
            "email"=>"boloss@boloss.com",
            "password"=>Hash::make("boloss123"),
            "role_id"=>3,
        ]]);
    }
}
