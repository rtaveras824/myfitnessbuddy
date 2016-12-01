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

Route::get('/home', 'HomeController@index');

Route::get('/meals', 'MealController@all');

Route::get('/meal/{meal}', 'MealController@show');

Route::get('/meals/create', 'MealController@index');

Route::post('/meals/add', 'MealController@store');