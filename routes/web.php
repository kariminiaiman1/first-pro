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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact-us', function(){
  return view('contact-us');
});
Route::get('/about-us', function(){
  return view('about-us');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
  Route::get('/submit-ads', function () {
      return view('submit-ads');
  });
  Route::get('/delete/{ads}', 'HomeController@destroy');
  Route::get('/edit/{ads}', 'HomeController@edit');
  Route::post('/update/{ads}', 'HomeController@update');
});
Route::post('create', 'advertise@create');
Route::get('search', 'HomeController@search');
