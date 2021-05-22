<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Auth;

use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Req;
use App\Models\State;
use App\Models\City;
use App\Models\Invoice;
use App\Models\Remark;

class RemarkController extends Controller
{
    public function index(Service $service)
    {
        //dd($service->id);

        return view('client.remarks.index-create')
            ->with('service', $service->id)
            ->with('remarks', Remark::where('service_id', $service->id)->get());
    }

    public function show(Service $service)
    {
        $status = $request->status ?? null;

        return view('client.remarks.show')->with('reqs', Req::where('service_id', $service->id)
            ->where('status', "Accepted")
            ->get());
    }

    public function create(Service $service)
    {
        return view('client.remarks.create')->with('service', $service);   
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $todayDate = Carbon::now()->format('d-m-Y');
        $todayTime = Carbon::now()->format('H:i:m');

        $request->validate([
            'notes' => 'required',
            'service_id' => 'required'
            ]);

            $remark = Remark::create([
             'notes' => $request->notes,
             'service_id' => $request->service_id, 
             'date_generate' => $todayDate,
             'time_generate' => $todayTime,
             'user_name' => Auth::user()->name,     
             
         ]);

         if($request->hasFile('attachment'))
         {
             $filename = $remark->id.'-'. date("Y-m-d").'.'.$request->attachment->getClientOriginalExtension();
             Storage::disk('public')->put($filename, File::get($request->attachment));
             $remark->update(['attachment' => $filename]);
         }

        return redirect(route('client.remarks.index', $request->service_id));
    }
}
