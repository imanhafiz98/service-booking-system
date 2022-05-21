<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'can:admin-views'])->group(function(){

    Route::prefix( 'admin' )->name( 'admin.' )->group( function () {

        //Dashboard
        Route::get('/dashboard/index', 'Admin\DashboardController@index')->name('dashboards.index'); 

        //ProfileController
        Route::prefix( 'profile' )->name( 'profiles.' )->group( function () {

            Route::get('/{user}/show', 'Admin\ProfileController@show')->name('show');
            Route::post('/upload', 'Admin\ProfileController@upload')->name('upload');
            Route::get('/{user}/edit', 'Admin\ProfileController@edit')->name('edit');
            Route::post('/{user}/update', 'Admin\ProfileController@update')->name('update');

        });

        //PasswordController
        Route::prefix( 'password' )->name( 'passwords.' )->group( function () {

            Route::get('/{user}/edit', 'Admin\PasswordController@edit')->name('edit');
            Route::post('/{user}/update', 'Admin\PasswordController@update')->name('update');

        });

        //UserController
        Route::prefix( 'user' )->name( 'users.' )->group( function () {

            Route::get('/index', 'Admin\UserController@index')->name('index');
            Route::get('/create', 'Admin\UserController@create')->name('create'); 
            Route::post('/store', 'Admin\UserController@store')->name('store'); 
            Route::get('/{user}/show', 'Admin\UserController@show')->name('show');
            Route::get('/{user}/edit', 'Admin\UserController@edit')->name('edit');
            Route::post('/{user}/update', 'Admin\UserController@update')->name('update');

        });

        //ServiceController
        Route::prefix( 'service' )->name( 'services.' )->group( function () {

            Route::get('/index', 'Admin\ServiceController@index')->name('index');
            Route::get('/index/{service}/address', 'Admin\ServiceController@indexAddress')->name('index.addresses');
            Route::get('/create', 'Admin\ServiceController@create')->name('create');
            Route::post('/store', 'Admin\ServiceController@store')->name('store');
            Route::get('/{service}/show', 'Admin\ServiceController@show')->name('show');
            Route::get('/{service}/edit', 'Admin\ServiceController@edit')->name('edit');
            Route::post('/{service}/update', 'Admin\ServiceController@update')->name('update');

        });

        //RequestController
        Route::prefix( 'request' )->name( 'requests.' )->group( function () {

            Route::get('/index', 'Admin\RequestController@index')->name('index');
            Route::get('/create', 'Admin\RequestController@create')->name('create');
            Route::post('/store', 'Admin\RequestController@store')->name('store');
            Route::get('/{req}/show', 'Admin\RequestController@show')->name('show');
            Route::get('/{req}/edit', 'Admin\RequestController@edit')->name('edit');
            Route::post('/{req}/update', 'Admin\RequestController@update')->name('update'); 

        });

        //RemarkController
        Route::prefix( 'remark' )->name( 'remarks.' )->group( function () {

            Route::get('/index/services', 'Admin\RemarkController@indexServices')->name('index.services');
            Route::get('/{service}/show', 'Admin\RemarkController@show')->name('show');
            Route::get('/{req}/index', 'Admin\RemarkController@index')->name('index');

        });

        //StateController
        Route::prefix( 'state' )->name( 'states.' )->group( function () {

            Route::get('/index', 'Admin\StateController@index')->name('index');
            Route::get('/create', 'Admin\StateController@create')->name('create');
            Route::post('/store', 'Admin\StateController@store')->name('store');

        });

        //CityController
        Route::prefix( 'city' )->name( 'cities.' )->group( function () {

            Route::get('/index', 'Admin\CityController@index')->name('index');
            Route::get('/create', 'Admin\CityController@create')->name('create');
            Route::post('/store', 'Admin\CityController@store')->name('store');

        });

        //CategoryController
        Route::prefix( 'category' )->name( 'categories.' )->group( function () {

            Route::get('/index', 'Admin\CategoryController@index')->name('index');
            Route::get('/create', 'Admin\CategoryController@create')->name('create');
            Route::post('/store', 'Admin\CategoryController@store')->name('store');

        });

        //InvoiceController
        Route::prefix( 'invoice' )->name( 'invoices.' )->group( function () {

        Route::get('/index', 'Admin\InvoiceController@index')->name('index');
        Route::get('/{invoice}/show', 'Admin\InvoiceController@show')->name('show');

        });


    });

});