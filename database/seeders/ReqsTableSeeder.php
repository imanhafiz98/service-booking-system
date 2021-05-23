<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Service;
use App\Models\Req;
use App\Models\Payment;

class ReqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //SERVICE ID = 1
        Req::create([
            'price' => '50',
            'notes' => 'Okay',
            'status' => 'Requested',
            'client_id' => '3',
            'service_id' => '1',
            'user_id' => '6',
            'payment_id' => '2'
            
        ]);

        Req::create([
            'price' => '100',
            'notes' => 'Baiklah',
            'status' => 'Requested',
            'client_id' => '3',
            'service_id' => '1',
            'user_id' => '7',
            'payment_id' => '1'
            
        ]);

        Req::create([
            'price' => '200',
            'notes' => 'Okie',
            'status' => 'Requested',
            'client_id' => '3',
            'service_id' => '1',
            'user_id' => '8',
            'payment_id' => '1'
            
        ]);


        //SERVICE ID = 2
        Req::create([
            'price' => '50',
            'notes' => 'Okay',
            'status' => 'Requested',
            'client_id' => '3',
            'service_id' => '2',
            'user_id' => '6',
            'payment_id' => '1'
            
        ]);

        Req::create([
            'price' => '100',
            'notes' => 'Baiklah',
            'status' => 'Requested',
            'client_id' => '3',
            'service_id' => '2',
            'user_id' => '7',
            'payment_id' => '1'
            
        ]);

        Req::create([
            'price' => '200',
            'notes' => 'Okie',
            'status' => 'Requested',
            'client_id' => '3',
            'service_id' => '2',
            'user_id' => '8',
            'payment_id' => '1'
            
        ]);


    }
}
