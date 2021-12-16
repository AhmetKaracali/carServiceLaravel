<?php

namespace Database\Seeders;

use App\Models\services;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       services::factory()->count(10)->create();
    }
}
