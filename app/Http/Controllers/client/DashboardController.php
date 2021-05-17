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
        $totalAllServices = \DB::table('Services')
                                    ->where('status', '=', 'Completed')->count();

        $totalPendingServices = \DB::table('Services')
                                    ->where('status', '=', 'Pending')->count();

        $totalOngoingServices = \DB::table('Services')
                                    ->where('status', '=', 'Ongoing')->count();


        //dd($countTotalAllServices);

        return view('client.dashboards.statistic')
            ->with('services', Service::all())
            ->with('totalAllServices', $totalAllServices)
            ->with('totalPendingServices', $totalPendingServices)
            ->with('totalOngoingServices', $totalOngoingServices);
    }
}
