<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        State::create([
            'name' => 'Johor'
        
        ]);

        State::create([
            'name' => 'Kedah'
        
        ]);

        State::create([
            'name' => 'Kelantan'
        
        ]);
        
        State::create([
            'name' => 'Malacca'
        
        ]);
        
        State::create([
            'name' => 'Negeri Sembilan'
        
        ]);

        State::create([
            'name' => 'Pahang'
        
        ]);

        State::create([
            'name' => 'Penang'
        
        ]);

        State::create([
            'name' => 'Perak'
        
        ]);

        State::create([
            'name' => 'Perlis'
        
        ]);

        State::create([
            'name' => 'Sabah'
        
        ]);

        State::create([
            'name' => 'Sarawak'
        
        ]);

        State::create([
            'name' => 'Selangor'
        
        ]);

        State::create([
            'name' => 'Terengganu'
        
        ]);

        State::create([
            'name' => 'Wilayah Persekutuan Kuala Lumpur'
        
        ]);

        State::create([
            'name' => 'Wilayah Persekutuan Labuan'
        
        ]);

        State::create([
            'name' => 'Wilayah Persekutuan Putrajaya'
        
        ]);
    }
}
