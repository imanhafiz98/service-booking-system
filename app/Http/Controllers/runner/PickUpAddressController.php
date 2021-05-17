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
    public function show(Service $service)
    {
        //dd($service->id);
        return view('runner.addresses.pickup.show')
            ->with('service', $service);
    }
}
