<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'name' => 'Manager',
            'role_id' => 1, 
            'email' => 'manager@company.com',
            'password' => Hash::make(value: 'secret'),

        ]);

        User::create([
            'name' => 'Example client',
            'role_id' => 2, 
            'email' => 'client@company.com',
            'password' => Hash::make(value: 'secret'),

        ]);
    }
}
