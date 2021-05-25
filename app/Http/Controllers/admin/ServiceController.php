<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;
use App\Models\Address;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.services.index')->with('services', Service::all());
    }

    public function indexAddress(Request $request, Service $service)
    {
        return view('admin.services.index-address')
            ->with('services', $service)
            ->with('addresses', Address::all());

    }

    public function create()
    {
        return view('admin.services.create')
            ->with('users', User::all())
            ->with('categories', Category::all())
            ->with('cities', City::all())
            ->with('states', State::all());   
    }

    public function store(Request $request)
    {
         //dd($request->all());
            $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'date' => ['required'],
            'time' => ['required'],
            'user_id' => ['required'],
            'category_id' => ['required'],
            'city_id' => ['required'],
        ]);

        $service = Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'status' => $request->status,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'city_id' => $request->city_id
        ]);

        return redirect(route('admin.services.index'));
    }

    public function show(Service $service)
    {
        return view('admin.services.show')->with('service', $service);
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit')
            ->with('service', $service)
            ->with('categories', Category::all())
            ->with('cities', City::all())
            ->with('states', State::all());   
    }

    public function update(Request $request, Service $service)
    {
        $data = request()->only(['name', 'description', 'date', 'time', 'user_id', 'category_id', 'city_id', 'status']);

        $service->name = $data['name'];
        $service->description = $data['description'];
        $service->date = $data['date'];
        $service->time = $data['time'];
        $service->user_id = $data['user_id'];
        $service->category_id = $data['category_id'];
        $service->city_id = $data['city_id'];
        $service->status = $data['status'];

        $service->update($data);

        return redirect(route('admin.services.index'));
    }
}
