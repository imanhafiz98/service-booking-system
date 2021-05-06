<?php

namespace App\Http\Controllers\runner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Location;
use App\Models\Category;
use App\Models\Req;

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
}
