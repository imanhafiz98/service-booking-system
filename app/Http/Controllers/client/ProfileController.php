<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('client.profiles.show')->with('user', $user);
    }

    public function edit(User $user)
    {
        return view('client.profiles.edit')->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        // dd($request->all());
        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $data = request()->only(['name', 'email', 'phone']);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];

        $user->update($data);

        return redirect(route('client.profiles.show'));
    }
}
