<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Admin',
            ],
            [
                'id'    => 2,
                'title' => 'User',
            ],
        ];
        Role::unprepared('SET IDENTITY_INSERT test_table ON');
        Role::insert($roles);
        Role::unprepared('SET IDENTITY_INSERT test_table OFF');
    }
}
