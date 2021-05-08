<?php

namespace App\Http\Controllers\runner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PasswordController extends Controller
{
    public function show(User $user)
    {
        return view('runner.passwords.show')->with('user', $user);
    }
}
