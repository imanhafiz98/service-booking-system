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
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('client.dashboards.index');
    }

    public function statistic()
    {
        //dd(Auth::user()->id);
        $totalAllServices = \DB::table('Services')
                                    ->where('user_id', '=', Auth::user()->id)->count();

        $totalPendingServices = \DB::table('Services')
                                    ->where('status', '=', 'Pending')
                                    ->where('user_id', '=', Auth::user()->id)->count();

        $totalOngoingServices = \DB::table('Services')
                                    ->where('status', '=', 'Ongoing')
                                    ->where('user_id', '=', Auth::user()->id)->count();


        //dd($countTotalAllServices);

        return view('client.dashboards.statistic')
            ->with('services', Service::all())
            ->with('totalAllServices', $totalAllServices)
            ->with('totalPendingServices', $totalPendingServices)
            ->with('totalOngoingServices', $totalOngoingServices);
    }
}
