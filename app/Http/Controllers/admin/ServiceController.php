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

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.services.index')->with('services', Service::all());
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
