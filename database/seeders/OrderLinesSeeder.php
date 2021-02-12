<?php

namespace Database\Seeders;

use App\Models\OrderLines;
use Illuminate\Database\Seeder;

class OrderLinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderLines::factory()->count(60)->create();
    }
}
