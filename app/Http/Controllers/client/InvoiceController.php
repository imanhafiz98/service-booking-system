<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('client.invoices.index')->with('invoices', Invoice::all());
    }

    public function generate(Request $request)
    {
        $status = $request->status ?? null;

        $reqs = Req::where(function ($query) use ($status){
            if($status){
                $query->where('status', $status);
                return $query;
            }
        })->get();
        
        return view('client.invoices.generate')->with('reqs', $reqs);
    }
    
    public function show(Req $req)
    {
        return view('client.invoices.show')->with('req', $req);
    }

    public function store(Req $req)
    {
        //dd($request->all());

        $todayDate = Carbon::now()->format('Y-m-d');
        $todayTime = Carbon::now()->format('H:i:m');

        $invoice = Invoice::create([
            'date_generate' => $todayDate,
            'time_generate' => $todayTime,
            'req_id' => $req->id
            
        ]);

        return redirect(route('client.services.index'));
    }
   
}
