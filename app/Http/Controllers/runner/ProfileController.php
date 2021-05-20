<?php

namespace App\Http\Controllers\runner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('runner.profiles.show')->with('user', $user);
    }

    public function edit(User $user)
    {
        return view('runner.profiles.edit')->with('user', $user);
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

        return redirect(route('runner.dashboards.index'));
    }
}
