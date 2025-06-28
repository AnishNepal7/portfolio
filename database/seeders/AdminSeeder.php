<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user if it doesn't exist
        User::firstOrCreate(
            ['email' => 'admin@portfolio.com'],
            [
                'name' => 'Admin',
                'email' => 'admin@portfolio.com',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );
        
        $this->command->info('Admin user created successfully!');
        $this->command->info('Email: admin@portfolio.com');
        $this->command->info('Password: admin123');
    }
}
