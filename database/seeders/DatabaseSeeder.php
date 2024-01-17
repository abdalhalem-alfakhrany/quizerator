<?php

namespace Database\Seeders;

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
        User::create([
            'email' => 'super_admin@app.com',
            'password' => Hash::make('super_admin123$$'),
            'name' => 'abdalhalem alfakhrany',
            'role' => 'admin',
        ]);

        User::create([
            'email' => 'student@app.com',
            'password' => Hash::make('student123$$'),
            'name' => 'abdalhalem alfakhrany',
            'role' => 'student',
        ]);
    }
}
