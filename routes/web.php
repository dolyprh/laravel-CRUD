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
    return view('welcome');
});

Route::get('/project', 'MahasiswaController@main');
Route::post('/project/create', 'MahasiswaController@create');
Route::get('/project/{id}/edit', 'MahasiswaController@edit');
Route::put('project/{id}', 'MahasiswaController@update');
Route::get('/project/{id}/delete', 'MahasiswaController@delete');