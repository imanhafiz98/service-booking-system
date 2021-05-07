<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Models\Location;
use App\Models\Category;
use App\Models\Req;

class WalletController extends Controller
{
    public function create()
    {
        return view('client.wallet.create');
    }
}
