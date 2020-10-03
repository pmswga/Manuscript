<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/contacts', function () {
    return 'This is contacts page';
});

Route::get('/about', function () {
    return 'This is about page';
});
