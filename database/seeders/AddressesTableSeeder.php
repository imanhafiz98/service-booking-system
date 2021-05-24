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
            'line_1' => 'No 1, Jalan P1',
            'line_2' => 'Presint 1',
            'postcode' => '10100',
            'city_id' => '1',
            'user_id' => '3'
            
        ]);

        //Iman Client
        Address::create([
            'notes' => 'Pick Up Address',
            'line_1' => 'Unit 1, Blok 1',
            'line_2' => 'TTDI Adina',
            'postcode' => '20100',
            'city_id' => '1',
            'user_id' => '3'
            
        ]);

        //Iman Client
        Address::create([
            'notes' => 'Deliver Address',
            'line_1' => 'No 1, Jalan P1',
            'line_2' => 'Presint 1',
            'postcode' => '10100',
            'city_id' => '1',
            'user_id' => '3'
            
        ]);

        //Iman Client
        Address::create([
            'notes' => 'Deliver Address',
            'line_1' => 'Unit 1, Blok 1',
            'line_2' => 'TTDI Adina',
            'postcode' => '20100',
            'city_id' => '1',
            'user_id' => '3'
            
        ]);


        //Adib Client
        Address::create([
            'notes' => 'Pick Up Address',
            'line_1' => 'No 100, Jalan 100',
            'line_2' => ' Jalan Ayer Keroh 100',
            'postcode' => '30100',
            'city_id' => '4',
            'user_id' => '4'
            
        ]);

        //Adib Client
        Address::create([
            'notes' => 'Deliver Address',
            'line_1' => 'Unit 200, Jalan 200',
            'line_2' => ' Jalan Ayer Keroh 200',
            'postcode' => '40100',
            'city_id' => '4',
            'user_id' => '4'
            
        ]);
    }
}
