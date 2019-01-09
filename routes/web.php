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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// frontend route
Route::get('/', 'HomeController@index')->name('welcome');
Route::get("property/details/{id}", "HomeController@showPropertyDetails")->name('property.details');
Route::get('contactus','HomeController@contactus')->name('contact');
Route::get('aboutus','HomeController@aboutus')->name('about');


Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth','admin']],function(){
	Route::get('dashboard','DashboardController@index')->name('dashboard');
	Route::resource('property','PropertyController');

	Route::put('property/{property}/approve','PropertyController@approve')->name('property.approve');
	Route::get('profile','DashboardController@profile')->name('profile');
});

Route::group(['as'=>'user.','prefix'=>'user', 'namespace'=>'User', 'middleware'=>['auth','user']],function(){

	Route::get('dashboard','DashboardController@index')->name('dashboard');
	Route::resource('property','PropertyController');
	Route::get('profile','DashboardController@profile')->name('profile');
});

