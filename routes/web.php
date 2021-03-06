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

Route::get('/', function () {
    return view('home');
});

Route::get('home', function() {
    return view('home');
});

Route::get('edulevels', 'EduLevelController@data');
Route::get('edulevels/add', 'EduLevelController@add');
Route::post('edulevels', 'EduLevelController@addProcess');
Route::get('edulevels/edit/{id}', 'EduLevelController@edit');
Route::patch('edulevels/{id}', 'EduLevelController@editProcess');
Route::delete('edulevels/{id}', 'EduLevelController@delete');



