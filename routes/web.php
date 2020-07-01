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

// Route::get('/', function () {
//     return view('master');
// });



Route::get('/','KaryawanController@index')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/admin','middleware' => ['auth']], function (){
    Route::resource('karyawans','KaryawanController');
    Route::resource('jabatans','JabatanController');
    Route::resource('pendidikans','PendidikanController');
    Route::resource('statuses','StatusController');

});

