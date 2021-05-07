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
Route::get('/client/create-test-service', 'Client\ServiceController@createTest')->name('client.services.create-test'); //new create form for create service
Route::post('/client/store-service', 'Client\ServiceController@store')->name('client.services.store');
Route::post('/client/update-service/{service}', 'Client\ServiceController@update')->name('client.services.update');
Route::get('/client/dashboard', 'Client\ServiceController@dashboard')->name('client.dashboard'); //dashboard

//client/RequestController
Route::get('/client/index-request/{service}', 'Client\RequestController@index')->name('client.requests.index');
Route::post('/client/index-request/{req}', 'Client\RequestController@update')->name('client.requests.update');

//client/InvoiceController
Route::get('/client/show-invoice', 'Client\InvoiceController@show')->name('client.invoices.show');


//RUNNER

//runner/ServiceController
Route::get('/runner/index-service', 'Runner\ServiceController@index')->name('runner.services.index');
Route::get('/runner/show-service/{service}', 'Runner\ServiceController@show')->name('runner.services.show');
Route::get('/runner/show-test-service/{service}', 'Runner\ServiceController@showTest')->name('runner.services.show-test'); //new show form for submit request
Route::get('/runner/dashboard', 'Runner\ServiceController@dashboard')->name('runner.dashboard');  //dashboard

//runner/RequestController
Route::get('/runner/index-request', 'Runner\RequestController@index')->name('runner.requests.index');
Route::post('/runner/store-request', 'Runner\RequestController@store')->name('runner.requests.store');
Route::post('/client/update-request/{req}', 'Runner\RequestController@update')->name('runner.requests.update');


