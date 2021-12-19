<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create(
            [
                'name' => 'Abdul Wahid',
                'username' => 'wahid',
                'role' => 'resepsionis',
                'password' => bcrypt('123123123')
            ],
            // [
            //     'name' => 'Abdul Aziz',
            //     'username' => 'aziz',
            //     'role' => 'staf',
            //     'password' => bcrypt('123123123')
            // ],
            // [
            //     'name' => 'Dimas Ferarizki',
            //     'username' => 'dimas',
            //     'role' => 'ktu',
            //     'password' => bcrypt('123123123')
            // ],
            // [
            //     'name' => 'Novita Lestari',
            //     'username' => 'esta',
            //     'role' => 'kepsek',
            //     'password' => bcrypt('123123123')
            // ]
        );

            User::create();
    }
}
