<?php

namespace App\Http\Controllers\runner;

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
        return view('runner.dashboards.index');
    }

    public function statistic()
    {
        $totalCompletedReqs = \DB::table('Reqs')
                                    ->where('status', '=', 'Completed')->count();

        $totalRequestedReqs = \DB::table('Reqs')
                                    ->where('status', '=', 'Requested')->count();

        $totalAcceptedReqs = \DB::table('Reqs')
                                    ->where('status', '=', 'Accepted')->count();


        //dd($countTotalAllServices);

        return view('runner.dashboards.statistic')
            ->with('services', Service::all())
            ->with('reqs', Req::all())
            ->with('totalCompletedReqs', $totalCompletedReqs)
            ->with('totalRequestedReqs', $totalRequestedReqs)
            ->with('totalAcceptedReqs', $totalAcceptedReqs);
    }
}
