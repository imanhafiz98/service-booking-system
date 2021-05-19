<?php

namespace App\Http\Controllers\runner;

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
    public function create(Req $req)
    {
        return view('runner.remarks.create')->with('req', $req);   
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
             'req_id' => $request->req_id,           
             
         ]);

        return redirect(route('runner.dashboards.index'));

    }
}
