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
Route::get('/', function () {
    return view('auth/login');
});
Route::get('/welcome', function () {
    return view('auth/login');
});
Route::get("/site","companyregistration@index");
Route::get("/index", "pagescontroller@index");
Route::get("/services", "pagescontroller@services");
Route::get("/about", function(){
	return view('about');
});
Route::resource('students','studentscontroller');

Auth::routes(['verify' => true],['register'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'DataController@index');

Route::get('downloadData/{type}', 'DataController@downloadData');

// Route::post('importData', 'DataController@importData');
// Route::get('admin', 'CompanysController@create');

  