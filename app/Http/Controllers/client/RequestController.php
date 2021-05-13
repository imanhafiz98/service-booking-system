<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;


class RequestController extends Controller
{
    
    public function index(Service $service)
    {
        //dd($data->all());

        $status = $request->status ?? null;


        return view('client.requests.index')->with('reqs', Req::where('service_id', $service->id)
            ->where('status', "Requested")
            ->get());
    }


    public function update(Request $request, Req $req)
    {
        $data = request()->only(['status']);

        $req->status = "Accepted";
   
        $req->update($data);

        Service::where('id',$req->service_id)->update(['status' => "Ongoing"]);
        
        return redirect(route('client.dashboard'));
    }
}
