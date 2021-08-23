<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnes')->insert([
            [
                "name"=>"thomas",
                "age"=>"12",
                "email"=>"bamb@i.com",
                "gsm"=>"118218"
            ],
            [
                "name"=>"Salut",
                "age"=>"23",
                "email"=>"bamb@i.com",
                "gsm"=>"756778"
            ],
            [
                "name"=>"La Terre",
                "age"=>"34",
                "email"=>"bamb@i.com",
                "gsm"=>"231233"
            ],
            [
                "name"=>"Ca Gaze?",
                "age"=>"54",
                "email"=>"bamb@i.com",
                "gsm"=>"454355"
            ]
            ]);
    }
}
