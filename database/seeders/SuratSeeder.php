<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Surat::factory(10)->create();
    }
}
