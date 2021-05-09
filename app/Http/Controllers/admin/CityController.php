<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\State;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        return view('admin.cities.index')->with('cities', City::all());
    }

    public function create()
    {
        return view('admin.cities.create')->with('states', State::all());
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => 'required',
            'state_id' => 'required',
            ]);

        City::create([
            'name' => $request -> name,
            'state_id' => $request -> state_id
         ]);

        return redirect(route('admin.cities.index'));
    }
}
