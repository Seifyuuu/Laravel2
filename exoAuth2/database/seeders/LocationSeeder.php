<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            "text1"=>"Rue Marie Christine 240 Boîte 3",
            "text2"=>"1020 Laeken"
        ]);
    }
}