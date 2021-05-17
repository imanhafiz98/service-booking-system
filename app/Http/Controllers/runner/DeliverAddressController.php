<?php

namespace App\Http\Controllers\runner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Address;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;

class DeliverAddressController extends Controller
{
    public function show(Service $service)
    {
        // return view('runner.addresses.deliver.show')
        //     ->with('addresses', Address::all());

        return view('runner.addresses.deliver.show')->with('addresses', Address::where('service_id', $service)
            ->where('type', "Deliver")
            ->get());
    }
}
