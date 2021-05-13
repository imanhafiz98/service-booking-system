<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Category::create([
            'name' => 'Courier'
            
        ]);

        Category::create([
            'name' => 'Food Delivery'
            
        ]);

        Category::create([
            'name' => 'Transportation'
            
        ]);

        Category::create([
            'name' => 'Mart'
            
        ]);

        Category::create([
            'name' => 'Others'
            
        ]);
    }
}
