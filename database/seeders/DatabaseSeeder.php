<?php

namespace Database\Seeders;

use App\Models\Ambassador;
use App\Models\Division;
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
        Ambassador::factory(10)->create();
        Division::factory(10)->create();
    }
}
