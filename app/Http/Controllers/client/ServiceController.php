<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Models\Location;
use App\Models\Category;
use App\Models\Req;

class ServiceController extends Controller
{
    public function dashboard()
    {
        return view('client.dashboard');
    }
    
    public function create()
    {
        return view('client.services.create')
            ->with('locations', Location::all())
            ->with('categories', Category::all());
        
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            ]);

        auth()->user()->services()->create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'status' => $request->status,
            'category_id' => $request->category_id,
            'location_id' => $request->location_id
        ]);

        return redirect(route('client.dashboard'));
    }

    public function index(Request $request)
    {
        $status = $request->status ?? null;

        $services = Service::where(function ($query) use ($status){
            if($status){
                $query->where('status', $status);
                return $query;
            }
        })->get();
        
        return view('client.services.index')->with('services', $services);
    }

    
}