<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Address;
use App\Models\State;
use App\Models\City;

use Auth;

class AddressController extends Controller
{
    public function index(Service $service)
    {
        //dd($service->user_id);
        return view('client.addresses.index')->with('addresses', Address::where('user_id', Auth::user()->id)->get());
    }

    public function create()
    {
        return view('client.addresses.create')
            ->with('cities', City::all())
            ->with('states', State::all());   
    }

    public function store(Request $request)
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
            'city_id' => $request->city_id,
            'user_id' => Auth::user()->id,

        ]);

        //$user->addresses()->sync( $address->id );

        return redirect(route('client.addresses.index'));
    }

    public function edit(Address $address)
    {
        return view('client.addresses.edit')
            ->with('address', $address)
            ->with('cities', City::all())
            ->with('states', State::all()); 
    }

    public function update(Request $request, Address $address)
    {
        
        // dd($request->all());
        $this->validate(request(), [
            'line_1' => ['required', 'string', 'max:255'],
            'line_2' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'min:4', 'max:5'],
            'notes' => ['required', 'string', 'max:255'],
            'city_id' => ['required']
        ]);

    
        $address = $address->update($request->all());

        return redirect(route('client.addresses.index'));
    }

}
