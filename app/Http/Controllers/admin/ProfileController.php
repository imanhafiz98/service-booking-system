<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('admin.accounts.profiles.show')->with('user', $user);
    }

    public function edit(User $user)
    {
        return view('admin.accounts.profiles.edit')->with('user', $user);
    }

    public function upload(Request $request)
    {
        $data = request()->only(['picture']);

        if($request->hasFile('picture'))
        {
            $filename = auth()->user()->name.'-'.date("d-m-Y").'.'.$request->picture->getClientOriginalExtension();
            Storage::disk('public')->put($filename, File::get($request->picture));
            auth()->user()->update(['picture' => $filename]);
        }

        return redirect(route('admin.profiles.show', auth()->user()->id));
    }

    public function update(Request $request, User $user)
    {
        
        // dd($request->all());
        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string']
        ]);

    
        $user = $user->update($request->all());

        return redirect(route('admin.dashboards.index'));
    }
}
