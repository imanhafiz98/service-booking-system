<?php

namespace App\Http\Controllers\runner;

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
        return view('runner.dashboard');
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
        
        return view('runner.services.index')->with('services', $services);
    }

    public function show(Service $service)
    {
        //dd($service->all());
        return view('runner.services.show')->with('service', $service);
        //dd($service->all());
    }

    public function showTest(Service $service)
    {
        //dd($service->all());
        return view('runner.services.show-test')->with('service', $service);
        //dd($service->all());
    }
    
    
}
