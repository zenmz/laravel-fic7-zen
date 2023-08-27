<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@g.c',
            'email_verified_at' => now(),
            'password' => Hash::make('1111'),
            'phone' => '0000000000',
            'bio' => 'Anim labore anim Lorem elit anim exercitation incididunt mollit velit est amet.',
            'role' => 'admin',

        ]);
    }
}
