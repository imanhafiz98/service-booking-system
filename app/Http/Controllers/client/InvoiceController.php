<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Location;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;

class InvoiceController extends Controller
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
        
        return view('client.invoices.index')->with('reqs', $reqs);
    }
    
    public function show(Req $req)
    {
        return view('client.invoices.show')->with('req', $req);
    }
   
}
