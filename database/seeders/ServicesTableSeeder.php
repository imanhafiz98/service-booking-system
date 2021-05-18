<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\City;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Iman Client
        Service::create([
            'name' => 'Buy Lunch at Soru Static',
            'description' => '1 set of Lamb Chop',
            'date' => '2021-05-19',
            'time' => '04:14',
            'status' => 'Pending',
            'user_id' => '2',
            'category_id' => '2',
            'city_id' => '1'
        ]);

        Service::create([
            'name' => 'Post Monitor',
            'description' => 'Perlukan perkhidmatan courier untuk post monitor ke alamat yang dinyatakan.',
            'date' => '2021-05-22',
            'time' => '11:00',
            'status' => 'Pending',
            'user_id' => '2',
            'category_id' => '1',
            'city_id' => '2'
        ]);

        Service::create([
            'name' => 'Transport to KLIA from Shah Alam',
            'description' => 'Perlukan kereta dan perkhidmatan penghantaran ke KLIA untuk 3 orang dewasa dan 1 kanak-kanak.',
            'date' => '2021-05-25',
            'time' => '09:00',
            'status' => 'Pending',
            'user_id' => '2',
            'category_id' => '3',
            'city_id' => '1'
        ]);
    }
}
