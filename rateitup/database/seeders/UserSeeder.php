<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'Admin',
            'gender' => "Male",
            'password' => bcrypt('password123'),
        ]);

        User::create([
            'name' => 'Lia',
            'email' => 'liarizkykh@gmail.com',
            'role' => 'User',
            'gender' => "Female",
            'password' => bcrypt('password123'),
        ]);
    }
}
