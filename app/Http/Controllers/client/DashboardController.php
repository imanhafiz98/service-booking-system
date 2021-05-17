<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Address;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;

class DashboardController extends Controller
{
    public function index()
    {
        return view('client.dashboards.index');
    }

    public function statistic()
    {
        return view('client.dashboards.statistic')->with('services', Service::all());
    }
}
