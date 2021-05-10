<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index')->with('users', User::all());
    }

    public function show(User $user)
    {
        return view('admin.users.show')->with('user', $user);
    }

    public function edit(User $user)
    {
        return view('admin.users.edit')
            ->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        $data = request()->only(['name', 'email', 'phone', 'role']);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->role = $data['role'];

        $user->update($data);

        return redirect(route('admin.users.index'));
    }
}
