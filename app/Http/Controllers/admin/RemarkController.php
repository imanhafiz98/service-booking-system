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
use App\Models\Remark;

class RemarkController extends Controller
{
    public function indexServices(Request $request)
    {
        // return view('admin.services.index')->with('services', Service::all());

        $status = $request->status ?? null;

        $services = Service::where(function ($query) use ($status){
            if($status){
                $query->where('status', $status);
                return $query;
            }
        })->get();
        
        return view('admin.remarks.index-service')->with('services', $services);
    }

    public function show(Service $service)
    {
        $status = $request->status ?? null;

        return view('admin.remarks.show')->with('reqs', Req::where('service_id', $service->id)
            ->where('status', "Accepted")
            ->get());
    }

    public function index(Req $req)
    {
        //return view('runner.remarks.index')->with('remarks', Remark::all());

        return view('admin.remarks.index')->with('remarks', Remark::where('req_id', $req->id)->get());
    }
}
