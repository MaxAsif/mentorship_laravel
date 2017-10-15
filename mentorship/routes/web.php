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
    return view('home');
});
Route::get('/mentor_registration','MentorController@create');
Route::post('/mentor_registration','MentorController@store');
Route::get('/mentee_registration','MenteeController@create');
Route::post('/mentee_registration','MenteeController@store');
Route::get('/show/{id}','ProfileController@index');
Route::get('/show','ProfileController@show');
Route::post('/show','ProfileController@store');
Route::get('/logout','ProfileController@destroy');
?>
