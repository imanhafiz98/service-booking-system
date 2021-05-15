<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Address;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;

class AddressController extends Controller
{
    //

    public function create()
    {
        return view('client.addresses.create')
            ->with('addresses', Address::all())
            ->with('cities', City::all())
            ->with('states', State::all());   
    }
}
