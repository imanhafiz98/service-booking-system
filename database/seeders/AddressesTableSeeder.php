<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Address;
use App\Models\City;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Iman Client
        Address::create([
            'notes' => 'Pick Up Address',
            'line_1' => 'Unit 101',
            'line_2' => ' Jalan TTDI Adina',
            'postcode' => '40100',
            'city_id' => '1',
            'user_id' => '3'
            
        ]);

        //Iman Client
        Address::create([
            'notes' => 'Deliver Address',
            'line_1' => 'No 100',
            'line_2' => ' Jalan Presint 1',
            'postcode' => '60100',
            'city_id' => '1',
            'user_id' => '3'
            
        ]);


        //Adib Client
        Address::create([
            'notes' => 'Pick Up Address',
            'line_1' => 'No 201',
            'line_2' => ' Jalan Ayer Keroh 13/2',
            'postcode' => '21030',
            'city_id' => '4',
            'user_id' => '4'
            
        ]);
    }
}
