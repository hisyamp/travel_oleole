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

Route::get('/room', function () {
    return view('tampilan.room');
});
Route::resource('/category','CategoryController');
Route::resource('/city','CityController');
Route::get('/','ViewController@index')->name('view.index');
Route::get('/room/{id}', 'ViewController@room')->name('view.room');

Route::post('/search','ViewController@cari')->name('dropdown.store');

Route::get('/travel/tampil_hapus','TravelController@tampil_hapus')->name('travel.tampil_hapus');
Route::get('/travel/restore/{id}','TravelController@restore')->name('travel.restore');
Route::delete('/travel/kill/{id}','TravelController@kill')->name('travel.kill');
Route::resource('/travel','TravelController');
Route::resource('/galeri','GalleriesController');