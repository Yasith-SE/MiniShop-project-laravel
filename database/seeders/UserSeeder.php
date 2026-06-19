<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@minishop.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('admin1234'),
                'role' => 'super_admin',
                'email_verified_at' => now(),
            ]
        );

        User::updateOrCreate(
            ['email' => 'seller@minishop.com'],
            [
                'name' => 'TechHaven Store',
                'password' => Hash::make('seller1234'),
                'role' => 'seller',
                'email_verified_at' => now(),
            ]
        );

        User::updateOrCreate(
            ['email' => 'customer@minishop.com'],
            [
                'name' => 'MiniShop Customer',
                'password' => Hash::make('customer1234'),
                'role' => 'customer',
                'email_verified_at' => now(),
            ]
        );
    }
}
