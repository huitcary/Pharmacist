<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pharmacist;
class PharmacistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pharmacist::factory(20)->create();
    }
}
