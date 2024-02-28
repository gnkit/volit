<?php

namespace Database\Seeders;

use Domain\Account\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Manage Users', 'slug' => 'manage-users',],
            ['name' => 'Manage Tasks', 'slug' => 'manage-tasks',],
            ['name' => 'Manage Roles', 'slug' => 'manage-roles',],
            ['name' => 'Manage Permissions', 'slug' => 'manage-permissions',],
        ];

        Permission::insert($data);
    }
}
