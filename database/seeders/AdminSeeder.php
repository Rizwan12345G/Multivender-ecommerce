<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Rizwan',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678'), // Change 'password' to the desired admin password
            'email_verified_at' => now(),
            'user_type' => 'admin', // Assuming you have an 'is_admin' column to identify admin users
        ]);
    }
}
