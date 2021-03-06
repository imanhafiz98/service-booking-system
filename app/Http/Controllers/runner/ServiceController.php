<?php

namespace App\Http\Controllers\runner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;
use App\Models\Remark;
use App\Models\Address;
use App\Models\Payment;

class ServiceController extends Controller
{

    public function index(Request $request)
    {
        $status = $request->status ?? null;

        $services = Service::where(function ($query) use ($status){
            if($status){
                $query->where('status', $status);
                return $query;
            }
        })->get();
        
        return view('runner.services.index')
            ->with('services', $services)->with('addresses', Address::all());
    }

    public function indexTest(Request $request)
    {
        $status = $request->status ?? null;

        $services = Service::where(function ($query) use ($status){
            if($status){
                $query->where('status', $status);
                return $query;
            }
        })->get();
        
        return view('runner.services.index-test')
            ->with('services', $services);
    }

    public function show(Service $service)
    {
        //dd($service->all());
        return view('runner.services.show')
            ->with('service', $service)
            ->with('payments', Payment::all());
        
    }

    public function showTest(Service $service)
    {
        //dd($service->all());
        return view('runner.services.show-test')->with('service', $service);
        
    }
    
    
}
