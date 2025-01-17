<?php

namespace Database\Seeders;

use App\Practice;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Practiceのテストデータを10個つくる
        Practice::factory(10)->create();
        Movie::factory(10)->create();
    }
}
