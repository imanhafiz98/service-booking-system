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

        //admin
        User::create([
            'name' => 'Admin Iman',
            'email' => 'iman_admin@medkad.com',
            'phone' => '0111234567',
            'role' => 'admin',
            'password' => Hash::make('12345678')
        ]);

        //client
        User::create([
            'name' => 'Client Iman',
            'email' => 'iman_client@medkad.com',
            'phone' => '0121234567',
            'role' => 'client',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Client Adib',
            'email' => 'adib_client@medkad.com',
            'phone' => '0121234567',
            'role' => 'client',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Client Zuhaily',
            'email' => 'zuhaily_client@medkad.com',
            'phone' => '0121234567',
            'role' => 'client',
            'password' => Hash::make('12345678')
        ]);

        //runner
        User::create([
            'name' => 'Runner Iman',
            'email' => 'iman_runner@medkad.com',
            'phone' => '0131234567',
            'role' => 'runner',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Runner Adib',
            'email' => 'adib_runner@medkad.com',
            'phone' => '0131234567',
            'role' => 'runner',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Runner Zuhaily',
            'email' => 'zuhaily_runner@medkad.com',
            'phone' => '0131234567',
            'role' => 'runner',
            'password' => Hash::make('12345678')
        ]);

    }
}
