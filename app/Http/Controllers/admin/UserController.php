<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);


        return redirect(route('admin.users.index'));
    }
}
