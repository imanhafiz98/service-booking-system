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
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('runner.invoices.index')->with('invoices', Invoice::all());
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
        
        return view('runner.invoices.generate')->with('reqs', $reqs);
    }
}
