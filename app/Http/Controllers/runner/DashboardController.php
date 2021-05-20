<?php

namespace App\Http\Controllers\runner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;
use Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        return view('runner.dashboards.index');
    }

    public function statistic()
    {
        $day = Carbon::now()->format( 'l' );
        $todayDate = Carbon::now()->format('d-m-Y');
        $todayTime = Carbon::now()->format('H:i:m');

        $totalCompletedReqs = \DB::table('Reqs')
                                    ->where('status', '=', 'Completed')
                                    ->where('user_id', '=', Auth::user()->id)->count();

        $totalRequestedReqs = \DB::table('Reqs')
                                    ->where('status', '=', 'Requested')
                                    ->where('user_id', '=', Auth::user()->id)->count();

        $totalAcceptedReqs = \DB::table('Reqs')
                                    ->where('status', '=', 'Accepted')
                                    ->where('user_id', '=', Auth::user()->id)->count();


        //dd($countTotalAllServices);

        return view('runner.dashboards.statistic')
            ->with('day', $day)
            ->with('todayDate', $todayDate)
            ->with('todayTime', $todayTime)    
            ->with('services', Service::all())
            ->with('reqs', Req::all())
            ->with('totalCompletedReqs', $totalCompletedReqs)
            ->with('totalRequestedReqs', $totalRequestedReqs)
            ->with('totalAcceptedReqs', $totalAcceptedReqs);
    }
}
