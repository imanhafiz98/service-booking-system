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

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.services.index')->with('services', Service::all());
    }
}
