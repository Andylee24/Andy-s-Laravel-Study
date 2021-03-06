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
//
//Route::get('/', function () {
//    return view('andyweb.vps');
//});
Route::get('/', 'VpsController@index');
Route::get('/andy', function () {

    $name=request('name');
    $age=request('age');
    return view('andy',[

        'name'=>$name,
        'age'=>$age


    ]);
});

Route::get('/vps', 'VpsController@index');
Route::post('/vps','VpsController@store');
Route::get('/vps/{id}', 'VpsController@show');
Route::get('/add', 'VpsController@add');
Route::delete('/vps/{id}','VpsController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
