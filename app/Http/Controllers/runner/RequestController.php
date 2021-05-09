<?php

namespace App\Http\Controllers\runner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Location;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;

class RequestController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->status ?? null;

        $reqs = Req::where(function ($query) use ($status){
            if($status){
                $query->where('status', $status);
                return $query;
            }
        })->get();


        
        return view('runner.requests.index')->with('reqs', $reqs);
    }

    public function show(Req $req)
    {
        
        return view('runner.requests.show')->with('req', $req);
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'price' => 'required',
            'notes' => 'required',
             'client_id' => 'required',
             'service_id' => 'required',
            ]);

            auth()->user()->reqs()->create([
             'price' => $request->price,
             'notes' => $request->notes,
             'status' => $request->status,
             'client_id' => $request->client_id,
             'service_id' => $request->service_id,
             
         ]);

        return redirect(route('runner.requests.index'));

    }

    public function update(Request $request, Req $req)
    {
        
        $data = request()->only(['status']);

        if($req->status == "Requested")
        {
            $req->status = "Cancelled";
   
            $req->update($data);

            Service::where('id',$req->service_id)->update(['status' => "Pending"]);

        }


        if($req->status == "Accepted")
        {
            $req->status = "Completed";
   
            $req->update($data);

            Service::where('id',$req->service_id)->update(['status' => "Completed"]);
         
        }

        return redirect(route('runner.dashboard'));
    }
}
