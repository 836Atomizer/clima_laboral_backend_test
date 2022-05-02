<?php

namespace Database\Seeders;

use App\Models\Ambassador;
use Illuminate\Database\Seeder;

class AmbassadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ambassador::factory(10)->create();
    }
}
