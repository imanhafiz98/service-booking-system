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
use App\Models\Invoice;
use App\Models\Remark;
use App\Models\Payment;


class RequestController extends Controller
{
    
    public function index(Service $service)
    {
        $status = $request->status ?? null;

        return view('client.requests.index')->with('reqs', Req::where('service_id', $service->id)
            ->where('status', "Requested")
            ->get());
    }

    public function show(Req $req)
    {
        return view('client.requests.show')->with('req', $req);
    }


    public function update(Request $request, Req $req)
    {
        //dd($req);
        $data = request()->only(['req_id', 'user_id', 'service_id']);

        //dd($data);

        Req::where('id', $data['req_id'])->update(['status' => "Accepted"]);

        Service::where('id',$data['service_id'])->update(['status' => "Ongoing"]);

         Req::where('service_id', $data['service_id'])
                 ->where('id', '!=', $data['req_id'])
                 ->where('status', '!=', 'Cancelled')
                 ->update(['status' => "Rejected"]);
        
        return redirect(route('client.services.index'));
    }
}
