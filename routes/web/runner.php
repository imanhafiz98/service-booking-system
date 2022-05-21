<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'can:runner-views'])->group(function(){

    Route::prefix( 'runner' )->name( 'runner.' )->group( function () {

        //DashboardController
        Route::get('/dashboard/index', 'Runner\DashboardController@index')->name('dashboards.index'); 
        Route::get('/dashboard/statistic', 'Runner\DashboardController@statistic')->name('dashboards.statistic'); 

        //ServiceController
        Route::get('/service/index', 'Runner\ServiceController@index')->name('services.index');
        Route::get('/service/{service}/show', 'Runner\ServiceController@show')->name('services.show');
        Route::get('/show-test-service/{service}', 'Runner\ServiceController@showTest')->name('services.show-test');

        //AddressController
        Route::get('/address/{service}/index', 'Runner\AddressController@index')->name('addresses.index');

        //RequestController
        Route::get('/request/index', 'Runner\RequestController@index')->name('requests.index');
        Route::get('/request/{req}/show', 'Runner\RequestController@show')->name('requests.show');
        Route::post('/request/create', 'Runner\RequestController@store')->name('requests.store');
        Route::post('/request/{req}/update', 'Runner\RequestController@update')->name('requests.update');

        //RemarkController
        Route::get('/remark/{service}/index', 'Runner\RemarkController@index')->name('remarks.index');
        Route::get('/remark/{service}/create', 'Runner\RemarkController@create')->name('remarks.create');
        Route::post('/remark/store', 'Runner\RemarkController@store')->name('remarks.store');

        //ProfileController
        Route::get('/profile/{user}/show', 'Runner\ProfileController@show')->name('profiles.show');
        Route::get('/profile/{user}/edit', 'Runner\ProfileController@edit')->name('profiles.edit');
        Route::post('/profile/upload', 'Runner\ProfileController@upload')->name('profiles.upload');
        Route::post('/profile/{user}/update', 'Runner\ProfileController@update')->name('profiles.update');

        //PasswordController
        Route::get('/password/{user}/edit', 'Runner\PasswordController@edit')->name('passwords.edit');
        Route::post('/password/{user}/update', 'Runner\PasswordController@update')->name('passwords.update');

        //InvoiceController
        Route::get('/invoice/index', 'Runner\InvoiceController@index')->name('invoices.index');
        Route::get('/invoice/generate', 'Runner\InvoiceController@generate')->name('invoices.generate');
        Route::get('/invoice/{invoice}/show', 'Runner\InvoiceController@show')->name('invoices.show');
        Route::get('/invoice/{req}/store', 'Runner\InvoiceController@store')->name('invoices.store');

    });

});