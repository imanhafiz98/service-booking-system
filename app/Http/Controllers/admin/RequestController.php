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

class RequestController extends Controller
{
    public function index()
    {
        // $status = $request->status ?? null;

        // $reqs = Req::where(function ($query) use ($status){
        //     if($status){
        //         $query->where('status', $status);
        //         return $query;
        //     }
        // })->get();

        // return view('admin.requests.index')->with('reqs', $reqs);
        return view('admin.requests.index')->with('reqs', Req::all());
    }

    public function show(Req $req)
    {
        return view('admin.requests.show')->with('req', $req);
    }

    public function create()
    {
        return view('admin.requests.create')
            ->with('users', User::all())
            ->with('services', Service::all())
            ->with('reqs', Req::all());

    }

    public function store(Request $request)
    {
         //dd($request->all());
            $this->validate(request(), [
            'price' => ['required', 'string', 'max:255'],
            'notes' => ['required', 'string', 'max:255'],
            'client_id' => ['required'],
            'service_id' => ['required'],
            'user_id' => ['required']
        ]);

        $req = Req::create([
            'price' => $request->price,
            'notes' => $request->notes,
            'status' => $request->status,
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,
            'user_id' => $request->user_id
        ]);

        return redirect(route('admin.requests.index'));
    }

    public function edit(Req $req)
    {
        return view('admin.requests.edit')
            ->with('req', $req);

    }

    public function update(Request $request, Req $req)
    {
        //dd($request->all());
        $data = request()->only(['price', 'notes', 'status', 'client_id', 'service_id', 'user_id']);

        $req->price = $data['price'];
        $req->notes = $data['notes'];
        $req->status = $data['status'];
        $req->client_id = $data['client_id'];
        $req->service_id = $data['service_id'];
        $req->user_id = $data['user_id'];
        
        $req->update($data);

        return redirect(route('admin.requests.index'));
    }

    
}
