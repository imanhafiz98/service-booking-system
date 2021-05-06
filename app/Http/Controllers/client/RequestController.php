<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Location;
use App\Models\Category;
use App\Models\Req;

class RequestController extends Controller
{
    
    public function index(Service $service)
    {
        //dd($data->all());

        return view('client.requests.index')->with('reqs', Req::where('service_id', $service->id)->get());

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
