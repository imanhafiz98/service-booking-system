<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Req;
use App\Models\Invoice;
use App\Models\State;
use App\Models\City;
use App\Models\Address;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('admin.invoices.index')->with('invoices', Invoice::all());
    }

    public function show(Invoice $invoice)
    {
        return view('admin.invoices.show')->with('invoice', $invoice);
    }
}
