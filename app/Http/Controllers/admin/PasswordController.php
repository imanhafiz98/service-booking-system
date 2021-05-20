<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PasswordController extends Controller
{
    public function edit(User $user)
    {
        return view('admin.accounts.passwords.edit')->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'password_confirmation' => ['same:new_password'],
        ]);

        $data = request()->only(['new-password', 'password', 'password_confirmation']);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        
        return redirect(route('admin.dashboards.index'));
        
    }
}
