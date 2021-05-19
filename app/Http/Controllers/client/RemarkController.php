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

class RemarkController extends Controller
{
    // public function index(Service $service)
    // {
    //     //return view('runner.remarks.index')->with('remarks', Remark::all());

    //     return view('client.remarks.index')->with('remarks', Remark::where('req_id', $service->req->id)->get());
    // }

    public function index(Service $service)
    {
        $status = $request->status ?? null;

        return view('client.remarks.index')->with('reqs', Req::where('service_id', $service->id)
            ->with('remarks', Remark::where('req_id', $req->id))
            ->get());
    }

    public function create(Request $request, Service $service)
    {
        return view('client.remarks.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'notes' => 'required',
            'attachment' => 'required',
            'req_id' => 'required'
            ]);

        $remark = Remark::create([
            'notes' => $request->notes,
            'attachment' => $request->attachment,
            'req_id' => $request->city_id

        ]);

        return redirect(route('client.services.index'));
    }
}
