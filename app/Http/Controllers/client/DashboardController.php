<?php

namespace App\Http\Controllers\client;

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
        return view('client.dashboards.index');
    }

    public function statistic()
    {
        $day = Carbon::now()->format( 'l' );
        $todayDate = Carbon::now()->format('d-m-Y');
        $todayTime = Carbon::now()->format('H:i:m');

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
            ->with('day', $day)
            ->with('todayDate', $todayDate)
            ->with('todayTime', $todayTime)
            ->with('services', Service::all())
            ->with('totalAllServices', $totalAllServices)
            ->with('totalPendingServices', $totalPendingServices)
            ->with('totalOngoingServices', $totalOngoingServices);
    }
}
