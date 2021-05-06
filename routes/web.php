<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//CLIENT
//client/ServiceController
Route::get('/client/index-service', 'Client\ServiceController@index')->name('client.services.index');
Route::get('/client/create-service', 'Client\ServiceController@create')->name('client.services.create');
Route::post('/client/store-service', 'Client\ServiceController@store')->name('client.services.store');
Route::get('/client/dashboard', 'Client\ServiceController@dashboard')->name('client.dashboard'); //dashboard

//client/RequestController
Route::get('/client/index-request/{service}', 'Client\RequestController@index')->name('client.requests.index');
Route::post('/client/index-request/{req}', 'Client\RequestController@update')->name('client.requests.update');





//RUNNER
//runner/ServiceController
Route::get('/runner/index-service', 'Runner\ServiceController@index')->name('runner.services.index');
Route::get('/runner/index-request/{service}', 'Runner\ServiceController@show')->name('runner.services.show');
Route::get('/runner/dashboard', 'Runner\ServiceController@dashboard')->name('runner.dashboard');  //dahboard

//runner/RequestController
Route::get('/runner/index-request', 'Runner\RequestController@index')->name('runner.requests.index');
Route::post('/runner/index-request', 'Runner\RequestController@store')->name('runner.requests.store');


