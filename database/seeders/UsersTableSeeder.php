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
            'email' => 'iman_admin@medkad.com',
            'phone' => '0111234567',
            'role' => 'admin',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Client Iman',
            'email' => 'iman_client@medkad.com',
            'phone' => '0121234567',
            'role' => 'client',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Runner Iman',
            'email' => 'iman_runner@medkad.com',
            'phone' => '0131234567',
            'role' => 'runner',
            'password' => Hash::make('12345678')
        ]);

    }
}
