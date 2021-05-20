<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
use App\Models\State;
use App\Models\City;

use Auth;

class AddressController extends Controller
{
    public function create()
    {
        return view('client.addresses.create')
            ->with('cities', City::all())
            ->with('states', State::all());   
    }

    public function store(Request $request, User $user)
    {
        //dd($request->all());

        $this->validate(request(), [
            'line_1' => ['required', 'string', 'max:255'],
            'line_2' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'min:4', 'max:5'],
            'notes' => ['required', 'string', 'max:255'],
            'city_id' => ['required']
        ]);

        $address = Address::create([
            'line_1' => $request->line_1,
            'line_2' => $request->line_2,
            'postcode' => $request->postcode,
            'notes' => $request->notes,
            'city_id' => $request->city_id

        ]);

        $user->addresses()->sync( $address->id );

        return redirect(route('client.dashboards.index'));
    }

}
