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
use App\Models\Address;
use App\Models\Remark;
use Auth;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function create()
    {
        $day = Carbon::now()->format( 'l' );
        $todayDate = Carbon::now()->format('d-m-Y');
        $todayTime = Carbon::now()->format('H:i:m');

        return view('client.payments.create')
            ->with('day', $day)
            ->with('todayDate', $todayDate)
            ->with('todayTime', $todayTime);

    }
}
