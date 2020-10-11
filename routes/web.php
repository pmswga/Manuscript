<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\PagerController@welcome')->name('welcome');

Route::get('/searches', function () {

});

Route::get('/categories', function () {
    return 'Categories';
});

Route::group(['prefix' => '/books'], function () {

    Route::get('/', function () {

    });

    Route::get('/antiquarian', function () {
        return 'Antiquarian books';
    });

    Route::get('/second-hand', function () {
        return 'Second-hand books';
    });

    Route::get('/modern', function () {
        return 'Modern books';
    });

});

Route::get('/contacts', '\App\Http\Controllers\PagerController@contacts')->name('contacts');

Route::get('/about','\App\Http\Controllers\PagerController@about')->name('about');
