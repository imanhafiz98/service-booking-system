<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Models\Location;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;

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
            ->with('categories', Category::all())
            ->with('cities', City::all())
            ->with('states', State::all());   
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
            'location_id' => $request->location_id,
            'city_id' => $request->city_id

        ]);

        return redirect(route('client.dashboard'));
    }


    public function update(Request $request, Service $service)
    {
      
        $data = request()->only(['status']);

        $service->status = "Cancelled";
   
        $service->update($data);

        Req::where('id',$service->id)->update(['status' => "Cancelled"]);
        
        return redirect(route('client.dashboard'));
    }


    public function createTest()
    {
        return view('client.services.create-test-2')
            ->with('locations', Location::all())
            ->with('categories', Category::all()); 
    }

    
}
