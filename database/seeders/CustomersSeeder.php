<?php

namespace Database\Seeders;

use App\Models\customers;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        customers::factory()->count(500)->create();
    }
}
