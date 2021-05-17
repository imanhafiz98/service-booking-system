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

class PickUpAddressController extends Controller
{
    public function show(Address $address)
    {
        // return view('runner.addresses.pickup.show')
        //     ->with('address', $address);

        return view('runner.addresses.pickup.show')->with('addresses', Address::where('service', $service->id)
            ->where('type', "Pick Up")
            ->get());
    }
}
