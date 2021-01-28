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

Route::get('/about', function () {
    return view('about');
});

Route::get('land', function () {
    return view('landing');
});


Route::get('user','SecondController@getIndex');
Route::get('/test1', function () {
    return 'welcome';
}) ->name('a');

Route::group(['prefix' => 'users'], function(){
    // Set of Routes 
    Route::get('/',function(){
        return 'ddd';
    });

});

Route::get('second','SecondController@showString');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
