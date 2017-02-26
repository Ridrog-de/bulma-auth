<?php

Route::group(['middleware' => ['web', 'guest'], 'namespace' => 'Ridrog\BulmaAuth'], function () {

    Route::get('/login', 'BulmaAuthController@showLoginForm')->name('login');
    Route::get('/register', 'BulmaAuthController@showRegistrationForm')->name('register');
    Route::get('/password/reset', 'BulmaAuthController@showLinkRequestForm')->name('password.request');
    Route::get('/password/reset/{token}', 'BulmaAuthController@showResetForm')->name('password.reset');

});

Route::group(['middleware' => ['web', 'guest']], function () {

    Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
    Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');
    Route::post('/password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('/password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset');

});

Route::group(['middleware' => ['web']], function () {

    Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

});

