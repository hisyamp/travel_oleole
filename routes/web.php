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

Route::group(['middleware' => 'auth'], function(){
	Route::resource('/category','CategoryController');
	Route::resource('/city','CityController');
	Route::get('/travel/tampil_hapus','TravelController@tampil_hapus')->name('travel.tampil_hapus');
	Route::get('/travel/restore/{id}','TravelController@restore')->name('travel.restore');
	Route::delete('/travel/kill/{id}','TravelController@kill')->name('travel.kill');
	Route::resource('/travel','TravelController');
	Route::resource('/galeri','GalleriesController');
});



Route::get('/','ViewController@index')->name('view.index');
Route::get('/room/{id}', 'ViewController@room')->name('view.room');
Route::get('/about', 'ViewController@about')->name('view.about');
Route::get('/contact', 'ViewController@kontak')->name('view.contact');
Route::post('/search','ViewController@cari')->name('dropdown.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
