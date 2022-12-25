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
    return redirect('/home');

});

#pravi defaultne rute /login /register
Auth::routes();

#redirekcija /register na /login
Route::get("/register", function () {
    return redirect('/login');
});
//
Route::get("/check-user", "App\\Http\\Controllers\\CheckController@check")->name("checker");



Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
    Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
    Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
    Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
    Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
    Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
    Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
    Route::get('/klijent', "App\\Http\\Controllers\\HomeController@client")->name('client-home');
    Route::get('/aktivne-narudzbine', "App\\Http\\Controllers\\HomeController@clientOrder")->name('client-order');
    Route::get('/istorija-porudzbina', "App\\Http\\Controllers\\HomeController@clientHistory")->name('client-history');
    Route::get('/naruci', "App\\Http\\Controllers\\HomeController@clientPlaceOrder")->name('client-place-order');
    Route::post('/slanje-narudzbine', "App\\Http\\Controllers\\OrderController@order")->name('order');
    Route::post('/otkazivanje-narudzbine', "App\\Http\\Controllers\\OrderController@cancel")->name('cancel');
    Route::get('/random', "App\\Http\\Controllers\\HomeController@random")->name('random');
});

