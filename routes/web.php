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

Route::get('/', 'App\Http\Controllers\Portfolio@home');


Route::get('/edit_profile/{id}', 'App\Http\Controllers\Portfolio@edit_profile');
Route::post('/editprofile', 'App\Http\Controllers\Portfolio@editprofile');

Route::get('/admin', 'App\Http\Controllers\AdminController@dashboard');

Route::get('/profile', 'App\Http\Controllers\Portfolio@profile');

Route::get('/skills', 'App\Http\Controllers\Portfolio@skills');
Route::get('/add_skills', 'App\Http\Controllers\Portfolio@add_skills');
Route::post('/save_skills', 'App\Http\Controllers\Portfolio@saveskill');
Route::get('/edit_skill/{id}', 'App\Http\Controllers\Portfolio@edit_skill');
Route::post('/editskill', 'App\Http\Controllers\Portfolio@editskill');
Route::get('/delete_skill/{id}', 'App\Http\Controllers\Portfolio@delete_skill');

