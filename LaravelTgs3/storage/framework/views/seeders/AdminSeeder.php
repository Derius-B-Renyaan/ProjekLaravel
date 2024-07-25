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
        $admin = new User();
        $admin->username = 'Admin';
        $admin->email = 'admin@example.com';
        $admin->password = Hash::make('password');
        $admin->role = 'admin';
        $admin->save();
    }
}
