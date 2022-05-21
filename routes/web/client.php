<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'can:client-views'])->group(function(){

    Route::prefix( 'client' )->name( 'client.' )->group( function () {

        //DashboardController
        Route::get('/dashboard/index', 'Client\DashboardController@index')->name('dashboards.index'); 
        Route::get('/dashboard/statistic', 'Client\DashboardController@statistic')->name('dashboards.statistic'); 

        //ServiceController
        Route::get('/service/index', 'Client\ServiceController@index')->name('services.index');
        Route::get('/service/create', 'Client\ServiceController@create')->name('services.create');  
        Route::post('/service/store', 'Client\ServiceController@store')->name('services.store');
        Route::post('/service/{service}/update', 'Client\ServiceController@update')->name('services.update');

        Route::post('get-cities-by-state', 'AjaxController@getCity')->name('get.cities');

        //AddressController
        Route::get('/address/create', 'Client\AddressController@create')->name('addresses.create');
        Route::get('/service/address/{service}/index', 'Client\AddressController@index')->name('services.addresses.index');
        Route::post('/address/store', 'Client\AddressController@store')->name('addresses.store');
        Route::get('/address/{address}/edit', 'Client\AddressController@edit')->name('addresses.edit');
        Route::post('/address/{address}/upddate', 'Client\AddressController@update')->name('addresses.update');
        Route::delete('/address/{address}/delete', 'Client\AddressController@destroy')->name('addresses.destroy');

        Route::get('/address/index', 'Client\AddressController@indexTest')->name('addresses.index.test');

        //RequestController
        Route::get('/request/{service}/index', 'Client\RequestController@index')->name('requests.index');
        Route::get('/request/{req}/show', 'Client\RequestController@show')->name('requests.show');
        Route::post('/request/{req}/index', 'Client\RequestController@update')->name('requests.update');

        //RemarkController
        Route::get('/remark/{req}/show', 'Client\RemarkController@show')->name('remarks.show');
        Route::get('/remark/{service}/index', 'Client\RemarkController@index')->name('remarks.index');
        Route::get('/remark/{service}/create', 'Client\RemarkController@create')->name('remarks.create');
        Route::post('/remark/store', 'Client\RemarkController@store')->name('remarks.store');

        //ProfileController
        Route::get('/profile/{user}/show', 'Client\ProfileController@show')->name('profiles.show');
        Route::get('/profile/{user}/edit', 'Client\ProfileController@edit')->name('profiles.edit');
        Route::post('/profile/upload', 'Client\ProfileController@upload')->name('profiles.upload');
        Route::post('/profile/{user}/update', 'Client\ProfileController@update')->name('profiles.update');

        //PasswordController
        Route::get('/password/{user}/edit', 'Client\PasswordController@edit')->name('passwords.edit');
        Route::post('/password/{user}/update', 'Client\PasswordController@update')->name('passwords.update');

        //InvoiceController
        Route::get('/invoice/generate', 'Client\InvoiceController@generate')->name('invoices.generate');
        Route::get('/invoice/index', 'Client\InvoiceController@index')->name('invoices.index');
        Route::get('/invoice/{invoice}/show', 'Client\InvoiceController@show')->name('invoices.show');
        Route::get('/invoice/{req}/store', 'Client\InvoiceController@store')->name('invoices.store');

        //PaymentController
        Route::get('/payment/{req}/create', 'Client\PaymentController@create')->name('payments.create');
        Route::get('/payment/{req}/show', 'Client\PaymentController@show')->name('payments.show');

    });

});