<?php

namespace App\Http\Controllers\runner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;
use App\Models\Remark;

class RemarkController extends Controller
{
    public function index(Req $req)
    {
        //return view('runner.remarks.index')->with('remarks', Remark::all());

        return view('runner.remarks.index')->with('remarks', Remark::where('req_id', $req->id)->get());
    }

    public function show(Req $req)
    {
        return view('runner.remarks.show')->with('req', $req);   
    }

    public function create(Req $req)
    {
        return view('runner.remarks.create')->with('req', $req);   
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $todayDate = Carbon::now()->format('Y-m-d');
        $todayTime = Carbon::now()->format('H:i:m');

        $request->validate([
            'notes' => 'required',
            'attachment' => 'required',
             'req_id' => 'required'
            ]);

            $remark = Remark::create([
             'notes' => $request->notes,
             'attachment' => $request->attachment,
             'req_id' => $request->req_id, 
             'date_generate' => $todayDate,
            'time_generate' => $todayTime          
             
         ]);

        return redirect(route('runner.dashboards.index'));

    }
}
