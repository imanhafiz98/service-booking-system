<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin Iman',
            'email' => 'iman@medkad.com',
            'phone' => '0111234567',
            'role' => 'admin',
            'password' => Hash::make('12345678')
        ]);

    }
}
