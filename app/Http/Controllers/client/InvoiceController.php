<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Location;
use App\Models\Category;
use App\Models\Req;

class InvoiceController extends Controller
{
    public function show()
    {
        return view('client.invoices.show');
    }
}
