<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        City::create([
            'name' => 'Shah Alam',
            'state_id' => '12'
        
        ]);

        City::create([
            'name' => 'Damansara',
            'state_id' => '12'
        
        ]);

        City::create([
            'name' => 'Kota Bahru',
            'state_id' => '3'
        
        ]);

        City::create([
            'name' => 'Bandaraya Melaka',
            'state_id' => '4'
        
        ]);

        City::create([
            'name' => 'Johor Bahru',
            'state_id' => '1'
        
        ]);

        City::create([
            'name' => 'Kuala Terengganu',
            'state_id' => '13'
        
        ]);

        City::create([
            'name' => 'Jengka',
            'state_id' => '6'
        
        ]);
    }
}
