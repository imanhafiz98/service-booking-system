<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\State;

class StateController extends Controller
{
    public function index()
    {
        return view('admin.states.index')->with('states', State::all());
    }

    public function create()
    {
        return view('admin.states.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => 'required',
            ]);

        State::create([
            'name' => $request -> name
    
            ]);

        return redirect(route('admin.states.index'));
    }
}
