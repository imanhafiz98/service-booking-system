<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PasswordController extends Controller
{
    public function show(User $user)
    {
        return view('client.passwords.show')->with('user', $user);
    }
}
