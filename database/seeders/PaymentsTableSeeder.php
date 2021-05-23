<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'type' => 'Cash on Delivery',
        
        ]);

        Payment::create([
            'type' => 'Credit/Debit Card',
        
        ]);
    }
}
