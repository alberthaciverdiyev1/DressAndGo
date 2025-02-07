<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleAndPermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'developer']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'moderator']);
        Role::create(['name' => 'user']);
        Role::create(['name' => 'seller']);

        $admin = \App\Models\User::find(1);
        if ($admin) {
            $admin->assignRole('admin');
        }
    }
}
