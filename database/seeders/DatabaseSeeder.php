<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $developerUser = User::factory()->create([
            'name' => 'Albert',
            'email' => 'alberthaciverdiyev55@gmail.com',
            'password' => Hash::make('albert'),
        ]);
        $this->call([RoleAndPermission::class]);

        $developerUser->assignRole('developer');
//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
