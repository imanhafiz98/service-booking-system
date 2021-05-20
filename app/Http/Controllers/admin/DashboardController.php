<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;
use Auth;

class DashboardController extends Controller
{
    public function statistic()
    {
        //dd(Auth::user()->id);
        $totalAllUsers = \DB::table('Users')->count();

        $totalClients = \DB::table('Users')
                                     ->where('role', '=', 'client')
                                     ->count();

         $totalRunners = \DB::table('Users')
                                     ->where('role', '=', 'runner')
                                     ->count();


        //dd($countTotalAllServices);

        return view('admin.dashboards.statistic')
            ->with('totalAllUsers', $totalAllUsers)
            ->with('totalClients', $totalClients)
            ->with('totalRunners', $totalRunners);

    }
}
