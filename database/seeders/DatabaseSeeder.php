<?php

namespace Database\Seeders;

use App\Models\Employe;
use App\Models\Gun;
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
        // \App\Models\User::factory(10)->create();
        Gun::factory(5)->create();
        Employe::factory(5)->create();
    }
}
