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

// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'isAdmin'],function(){

// Route::get('dashboard', 'Admin\StateController@dashboard')->name('dashboard'); //dashboard 

// //UserController
// Route::get('user/index', 'Admin\UserController@index')->name('users.index');
// Route::get('user/create', 'Admin\UserController@create')->name('users.create'); 
// Route::post('user/store', 'Admin\UserController@store')->name('users.store'); 
// Route::get('user/{user}/show', 'Admin\UserController@show')->name('users.show');
// Route::get('user/{user}/edit', 'Admin\UserController@edit')->name('users.edit');
// Route::post('user/{user}/update', 'Admin\UserController@update')->name('users.update');

// //ServiceController
// Route::get('service/index', 'Admin\ServiceController@index')->name('services.index');
// Route::get('service/create', 'Admin\ServiceController@create')->name('services.create');
// Route::post('service/store', 'Admin\ServiceController@store')->name('services.store');
// Route::get('service/{service}/show', 'Admin\ServiceController@show')->name('services.show');
// Route::get('service/{service}/edit', 'Admin\ServiceController@edit')->name('services.edit');
// Route::post('service/{service}/update', 'Admin\ServiceController@update')->name('services.update');


// //RequestController
// Route::get('request/index', 'Admin\RequestController@index')->name('requests.index');
// Route::get('request/create', 'Admin\RequestController@create')->name('requests.create');
// Route::post('request/store', 'Admin\RequestController@store')->name('requests.store');
// Route::get('request/{req}/show', 'Admin\RequestController@show')->name('requests.show');
// Route::get('request/{req}/edit', 'Admin\RequestController@edit')->name('requests.edit');
// Route::post('request/{req}/update', 'Admin\RequestController@update')->name('requests.update'); 

// //StateController
// Route::get('state/index', 'Admin\StateController@index')->name('states.index');
// Route::get('state/create', 'Admin\StateController@create')->name('states.create');
// Route::post('state/store', 'Admin\StateController@store')->name('states.store');

// //CityController
// Route::get('city/index', 'Admin\CityController@index')->name('cities.index');
// Route::get('city/create', 'Admin\CityController@create')->name('cities.create');
// Route::post('city/store', 'Admin\CityController@store')->name('cities.store');

// //CategoryController
// Route::get('category/index', 'Admin\CategoryController@index')->name('categories.index');
// Route::get('category/create', 'Admin\CategoryController@create')->name('categories.create');
// Route::post('category/store', 'Admin\CategoryController@store')->name('categories.store');


// });

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


//DashboardController
Route::get('/client/dashboard/index', 'Client\DashboardController@index')->name('client.dashboards.index'); 
Route::get('/client/dashboard/statistic', 'Client\DashboardController@statistic')->name('client.dashboards.statistic'); 

//ServiceController
Route::get('/client/service/index', 'Client\ServiceController@index')->name('client.services.index');
Route::get('/client/service/create', 'Client\ServiceController@create')->name('client.services.create');  
Route::post('/client/service/store', 'Client\ServiceController@store')->name('client.services.store');
Route::post('/client/service/{service}/update', 'Client\ServiceController@update')->name('client.services.update');

//PickUpAddressController
Route::get('/client/pickup/address/{service}/create', 'Client\PickUpAddressController@create')->name('client.addresses.pickup.create');
Route::post('/client/pickup/address/store', 'Client\PickUpAddressController@store')->name('client.addresses.pickup.store');
Route::get('/client/pickup/address/{service}/show', 'Client\PickUpAddressController@show')->name('client.addresses.pickup.show');

//DeliverAddressController
Route::get('/client/deliver/address/{service}/create', 'Client\DeliverAddressController@create')->name('client.addresses.deliver.create');
Route::post('/client/deliver/address/store', 'Client\DeliverAddressController@store')->name('client.addresses.deliver.store');
Route::get('/client/deliver/address/{service}/show', 'Client\DeliverAddressController@show')->name('client.addresses.deliver.show');

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
Route::get('/client/invoice/generate', 'Client\InvoiceController@generate')->name('client.invoices.generate');
Route::get('/client/invoice/{invoice}/show', 'Client\InvoiceController@show')->name('client.invoices.show');
Route::get('/client/invoice/{req}/store', 'Client\InvoiceController@store')->name('client.invoices.store');

});




//_________________________________________________________RUNNER_________________________________________________________//

Route::middleware(['auth', 'can:runner-views'])->group(function(){

//DashboardController
Route::get('/runner/dashboard/index', 'Runner\DashboardController@index')->name('runner.dashboards.index'); 
Route::get('/runner/dashboard/statistic', 'Runner\DashboardController@statistic')->name('runner.dashboards.statistic'); 

//ServiceController
Route::get('/runner/service/index', 'Runner\ServiceController@index')->name('runner.services.index');
Route::get('/runner/service/{service}/show', 'Runner\ServiceController@show')->name('runner.services.show');
Route::get('/runner/show-test-service/{service}', 'Runner\ServiceController@showTest')->name('runner.services.show-test'); //new show form for submit request
Route::get('/runner/dashboard', 'Runner\ServiceController@dashboard')->name('runner.dashboard');  //dashboard

//PickUpAddressController
Route::get('/runner/pickup/address/{service}/show', 'Runner\PickUpAddressController@show')->name('runner.addresses.pickup.show');

//DeliverAddressController
Route::get('/runner/deliver/address/{service}/show', 'Runner\DeliverAddressController@show')->name('runner.addresses.deliver.show');

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