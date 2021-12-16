<?php

namespace Database\Seeders;

use App\Models\orders;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        orders::factory()->count(50)->create();
    }
}
