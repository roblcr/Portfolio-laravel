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
Route::post('/editskills', 'App\Http\Controllers\Portfolio@editskills');
Route::get('/delete_skill/{id}', 'App\Http\Controllers\Portfolio@delete_skill');

Route::get('/education', 'App\Http\Controllers\Portfolio@education');
Route::get('/add_education', 'App\Http\Controllers\Portfolio@add_education');
Route::post('/save_education', 'App\Http\Controllers\Portfolio@saveducation');
Route::get('/edit_education/{id}', 'App\Http\Controllers\Portfolio@edit_education');
Route::post('/editskill', 'App\Http\Controllers\Portfolio@editeducation');
Route::get('/delete_education/{id}', 'App\Http\Controllers\Portfolio@delete_education');

Route::get('/professional_exp', 'App\Http\Controllers\Portfolio@professional_experience');
Route::get('/add_professionalexp', 'App\Http\Controllers\Portfolio@add_professionalexp');
Route::post('/save_professionalexp', 'App\Http\Controllers\Portfolio@saveprofessionalexp');

