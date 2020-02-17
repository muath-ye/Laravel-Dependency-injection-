<?php

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

Route::middleware(['auth'])->group(
    function () {
        Route::get('/service-container-payment', 'PaymentableController@show')->name('view.payment');
        Route::post('/service-container-payment', 'PaymentableController@store')->name('payment');
    }
);


Route::get(
    '/',
    function () {
        return view('home');
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
