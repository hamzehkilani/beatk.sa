<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@beatk.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'is_confirmed' => true,
            'confirmed_at' => now(),
            'is_activated' => true,
            'activated_at' => now(),
        ]);
    }
}
