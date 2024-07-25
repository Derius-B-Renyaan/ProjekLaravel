<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->username = 'hasanudin';
        $user->email = 'dino@example.com';
        $user->password = Hash::make('password');
        $user->role     = 'siswa';
        $user->save();

        $siswa = new Siswa();
        $siswa->username = 'hasanudin';
        $siswa->email = 'dino@example.com';
        $siswa->nisn = '321321';
        $siswa->user_id = $user->id; // Set the user_id column to the ID of the related User instance
        $siswa->save();
    }
}
