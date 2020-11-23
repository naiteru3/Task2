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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create'); 
     
     Route::get('profile/create', 'Admin\ProfileController@add');
     Route::post('profile/create', 'Admin\ProfileController@create');
     Route::get('profile/edit', 'Admin\ProfileController@edit');
     Route::post('profile/edit', 'Admin\ProfileController@update');
     
});


/*課題　３*/
Route::get( 'admin','Admin\AAAController@bbb');
/*課題　４*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


