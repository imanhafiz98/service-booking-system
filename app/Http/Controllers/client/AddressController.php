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

    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate(request(), [
            'line_1' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'min:5', 'max:5'],
            'type' => ['required'],
            'city_id' => ['required'],
            'req_id' => ['required']
        ]);

        auth()->user()->services()->create([
            'line_1' => $request->line_1,
            'line_2' => $request->line_2,
            'postcode' => $request->postcode,
            'type' => $request->type,
            'city_id' => $request->city_id,
            'req_id' => $request->req_id

        ]);

        return redirect(route('client.services.index'));
    }
}
