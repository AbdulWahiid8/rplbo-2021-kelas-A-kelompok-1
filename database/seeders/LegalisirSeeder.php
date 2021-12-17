<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LegalisirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Legalisir::factory(5)->create();
    }
}
