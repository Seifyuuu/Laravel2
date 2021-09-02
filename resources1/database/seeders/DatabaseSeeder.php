<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Color::factory(10)->create();
       \App\Models\Album::factory(10)->create();

    }
}
