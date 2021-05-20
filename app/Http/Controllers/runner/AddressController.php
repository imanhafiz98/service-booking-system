<?php

namespace App\Http\Controllers\runner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;
use App\Models\Remark;
use App\Models\Address;

class AddressController extends Controller
{
    public function index(Service $service)
    {
        //dd($service->user_id);
        return view('runner.addresses.index')->with('addresses', Address::where('user_id', $service->user_id)->get());
    }
}
