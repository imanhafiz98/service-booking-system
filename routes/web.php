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



//_________________________________________________________ADMIN_________________________________________________________//

Route::middleware(['auth', 'can:admin-views'])->group(function(){


Route::get('/admin/dashboard', 'Admin\StateController@dashboard')->name('admin.dashboard'); //dashboard 

//UserController
Route::get('/admin/user/index', 'Admin\UserController@index')->name('admin.users.index');
Route::get('/admin/user/create', 'Admin\UserController@create')->name('admin.users.create'); 
Route::post('/admin/user/store', 'Admin\UserController@store')->name('admin.users.store'); 
Route::get('/admin/user/{user}/show', 'Admin\UserController@show')->name('admin.users.show');
Route::get('/admin/user/{user}/edit', 'Admin\UserController@edit')->name('admin.users.edit');
Route::post('/admin/user/{user}/update', 'Admin\UserController@update')->name('admin.users.update');

//ServiceController
Route::get('/admin/service/index', 'Admin\ServiceController@index')->name('admin.services.index');
Route::get('/admin/service/create', 'Admin\ServiceController@create')->name('admin.services.create');
Route::post('/admin/service/store', 'Admin\ServiceController@store')->name('admin.services.store');
Route::get('/admin/service/{service}/show', 'Admin\ServiceController@show')->name('admin.services.show');
Route::get('/admin/service/{service}/edit', 'Admin\ServiceController@edit')->name('admin.services.edit');
Route::post('/admin/service/{service}/update', 'Admin\ServiceController@update')->name('admin.services.update');


//RequestController
Route::get('/admin/request/index', 'Admin\RequestController@index')->name('admin.requests.index');
Route::get('/admin/request/create', 'Admin\RequestController@create')->name('admin.requests.create');
Route::post('/admin/request/store', 'Admin\RequestController@store')->name('admin.requests.store');
Route::get('/admin/request/{req}/show', 'Admin\RequestController@show')->name('admin.requests.show');
Route::get('/admin/request/{req}/edit', 'Admin\RequestController@edit')->name('admin.requests.edit');
Route::post('/admin/request/{req}/update', 'Admin\RequestController@update')->name('admin.requests.update'); 

//StateController
Route::get('/admin/state/index', 'Admin\StateController@index')->name('admin.states.index');
Route::get('/admin/state/create', 'Admin\StateController@create')->name('admin.states.create');
Route::post('/admin/state/store', 'Admin\StateController@store')->name('admin.states.store');

//CityController
Route::get('/admin/city/index', 'Admin\CityController@index')->name('admin.cities.index');
Route::get('/admin/city/create', 'Admin\CityController@create')->name('admin.cities.create');
Route::post('/admin/city/store', 'Admin\CityController@store')->name('admin.cities.store');

//CategoryController
Route::get('/admin/category/index', 'Admin\CategoryController@index')->name('admin.categories.index');
Route::get('/admin/category/create', 'Admin\CategoryController@create')->name('admin.categories.create');
Route::post('/admin/category/store', 'Admin\CategoryController@store')->name('admin.categories.store');

});



//_________________________________________________________CLIENT_________________________________________________________//

Route::middleware(['auth', 'can:client-views'])->group(function(){


//ServiceController
Route::get('/client/service/index', 'Client\ServiceController@index')->name('client.services.index');
Route::get('/client/service/create', 'Client\ServiceController@create')->name('client.services.create');  
Route::post('/client/service/store', 'Client\ServiceController@store')->name('client.services.store');
Route::post('/client/service/{service}/update', 'Client\ServiceController@update')->name('client.services.update');
Route::get('/client/dashboard', 'Client\ServiceController@dashboard')->name('client.dashboard'); //dashboard

//AddressController
Route::get('/client/address/create', 'Client\AddressController@create')->name('client.addresses.create');

//RequestController
Route::get('/client/request/{service}/index', 'Client\RequestController@index')->name('client.requests.index');
Route::post('/client/request/{req}/index', 'Client\RequestController@update')->name('client.requests.update');

//ProfileController
Route::get('/client/profile/{user}/show', 'Client\ProfileController@show')->name('client.profiles.show');
Route::get('/client/profile/{user}/edit', 'Client\ProfileController@edit')->name('client.profiles.edit');
Route::post('/client/profile/{user}/update', 'Client\ProfileController@update')->name('client.profiles.update');

//PasswordController
Route::get('/client/password/{user}/show', 'Client\PasswordController@show')->name('client.passwords.show');

//InvoiceController
Route::get('/client/invoice/index', 'Client\InvoiceController@index')->name('client.invoices.index');
Route::get('/client/invoice/{req}/show', 'Client\InvoiceController@show')->name('client.invoices.show');

});




//_________________________________________________________RUNNER_________________________________________________________//

Route::middleware(['auth', 'can:runner-views'])->group(function(){


//ServiceController
Route::get('/runner/service/index', 'Runner\ServiceController@index')->name('runner.services.index');
Route::get('/runner/service/{service}/show', 'Runner\ServiceController@show')->name('runner.services.show');
Route::get('/runner/show-test-service/{service}', 'Runner\ServiceController@showTest')->name('runner.services.show-test'); //new show form for submit request
Route::get('/runner/dashboard', 'Runner\ServiceController@dashboard')->name('runner.dashboard');  //dashboard

//RequestController
Route::get('/runner/request/index', 'Runner\RequestController@index')->name('runner.requests.index');
Route::get('/runner/request/{req}/show', 'Runner\RequestController@show')->name('runner.requests.show');
Route::post('/runner/request/create', 'Runner\RequestController@store')->name('runner.requests.store');
Route::post('/runner/request/{req}/update', 'Runner\RequestController@update')->name('runner.requests.update');

//ProfileController
Route::get('/runner/profile/{user}/show', 'Runner\ProfileController@show')->name('runner.profiles.show');

//PasswordController
Route::get('/runner/password/{user}/show', 'Runner\PasswordController@show')->name('runner.passwords.show');

});