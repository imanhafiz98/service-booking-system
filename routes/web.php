<?php

use Illuminate\Support\Facades\Route;

require 'web/admin.php';
require 'web/client.php';
require 'web/runner.php';

Auth::routes();

Route::get('/', function () { return view('homepage');});

Route::get('/homepage', 'Admin\UserController@index')->name('users.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'homepage'])->name('homepage');
