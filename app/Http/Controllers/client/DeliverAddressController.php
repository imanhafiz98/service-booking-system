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

class DeliverAddressController extends Controller
{
    public function create(Service $service)
    {
        return view('client.addresses.deliver.create')
            ->with('service', $service)
            ->with('addresses', Address::all())
            ->with('cities', City::all())
            ->with('states', State::all());   
    }

    public function show(Service $service)
    {
        return view('client.addresses.deliver.show')
            ->with('service', $service)
            ->with('addresses', Address::all());
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate(request(), [
            'line_1' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'min:5', 'max:5'],
            'type' => ['required'],
            'city_id' => ['required'],
            'service_id' => ['required']
        ]);

        $address = Address::create([
            'line_1' => $request->line_1,
            'line_2' => $request->line_2,
            'postcode' => $request->postcode,
            'type' => $request->type,
            'city_id' => $request->city_id,
            'service_id' => $request->service_id

        ]);

        return redirect(route('client.services.index'));
    }
}
