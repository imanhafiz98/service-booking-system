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
use App\Models\Address;
use App\Models\Remark;
use Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $day = Carbon::now()->format( 'l' );
        $todayDate = Carbon::now()->format('d-m-Y');
        $todayTime = Carbon::now()->format('H:i:m');

        //dd(Auth::user()->id);
        $totalAllUsers = \DB::table('Users')->count();

        $totalAdmins = \DB::table('Users')
                                     ->where('role', '=', 'admin')
                                     ->count();

        $totalClients = \DB::table('Users')
                                     ->where('role', '=', 'client')
                                     ->count();

        $totalRunners = \DB::table('Users')
                                     ->where('role', '=', 'runner')
                                     ->count();

        $totalServices = \DB::table('Services')->count();  

        $totalReqs = \DB::table('Reqs')->count();  
        
        $totalRemarks = \DB::table('Remarks')->count();  


        //dd($countTotalAllServices);

        return view('admin.dashboards.index')
            ->with('day', $day)
            ->with('todayDate', $todayDate)
            ->with('todayTime', $todayTime)
            ->with('totalAllUsers', $totalAllUsers)
            ->with('totalAdmins', $totalAdmins)
            ->with('totalClients', $totalClients)
            ->with('totalRunners', $totalRunners)
            ->with('totalServices', $totalServices)
            ->with('totalReqs', $totalReqs)
            ->with('totalRemarks', $totalRemarks)
            ->with('users', User::where('role', 'admin')->get());

    }
}
