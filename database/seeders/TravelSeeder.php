<?php

namespace Database\Seeders;

use App\Models\travel;
use Illuminate\Database\Seeder;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        travel::factory(15)->create();
    }
}
