<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Pre-made Super Admin Account
        User::updateOrCreate(
            ['email' => 'admin@minishop.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('admin1234'), // Pre-made password
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );

        // 2. Pre-made Seller Account (To test the Seller Dashboard)
        User::updateOrCreate(
            ['email' => 'seller@minishop.com'],
            [
                'name' => 'TechHaven Store',
                'password' => Hash::make('seller1234'),
                'role' => 'seller',
                'email_verified_at' => now(),
            ]
        );
    }
}