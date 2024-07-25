<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $user = new User();
        $user->username = 'Amrin';
        $user->email = 'amrin@gmail.com';
        $user->password = Hash::make('password'); // assign a default password
        $user->role     = 'guru';
        $user->save();

        $guru = new Guru();
        $guru->username = 'Amrin';
        $guru->email = 'amrin@gmail.com';
        $guru->nip = $faker->numerify('##########'); // generate a random 10-digit NIP
        $guru->alamat = $faker->address;
        $guru->user_id = $user->id; // assign the user ID
        $guru->save();
    }
}
