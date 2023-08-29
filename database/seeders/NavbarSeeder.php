<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $links = [
            [
                'name' => 'Home',
                'route' => 'home',
                'ordering' => 1,
            ],
            [
                'name' => 'Add User',
                'route' => 'addUser',
                'ordering' => 2,
            ],
            [
                'name' => 'View Users',
                'route' => 'viewUsers',
                'ordering' => 3,
            ]
        ];
    }
}
