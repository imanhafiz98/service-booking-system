<?php

namespace App\Http\Controllers\admin;

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
    public function index()
    {
        // $status = $request->status ?? null;

        // $reqs = Req::where(function ($query) use ($status){
        //     if($status){
        //         $query->where('status', $status);
        //         return $query;
        //     }
        // })->get();

        // return view('admin.requests.index')->with('reqs', $reqs);
        return view('admin.requests.index')->with('reqs', Req::all());
    }

    public function show(Req $req)
    {
        return view('admin.requests.show')->with('req', $req);
    }
}
