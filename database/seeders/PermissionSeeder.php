<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'user-create',
            'user-show',
            'user-edit',
            'user-delete',
            'user-list',
            'role-create',
            'role-edit',
            'role-delete',
            'role-list',
            'slider-create',
            'slider-edit',
            'slider-delete',
            'slider-list',
            'slider-show',
            'agenda-create',
            'agenda-edit',
            'agenda-delete',
            'agenda-list',
            'agenda-show',
        ];
    }
}
