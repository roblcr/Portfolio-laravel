<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/edit_profile/{id}', 'App\Http\Controllers\Portfolio@edit_profile')->middleware('auth');;
Route::post('/editprofile', 'App\Http\Controllers\Portfolio@editprofile')->middleware('auth');;

Route::get('/admin', 'App\Http\Controllers\AdminController@dashboard');

Route::get('/profile', 'App\Http\Controllers\Portfolio@profile')->middleware('auth');;

Route::get('/skills', 'App\Http\Controllers\Portfolio@skills')->middleware('auth');;
Route::get('/add_skills', 'App\Http\Controllers\Portfolio@add_skills')->middleware('auth');;
Route::post('/save_skills', 'App\Http\Controllers\Portfolio@saveskill')->middleware('auth');;
Route::get('/edit_skill/{id}', 'App\Http\Controllers\Portfolio@edit_skill')->middleware('auth');;
Route::post('/editskills', 'App\Http\Controllers\Portfolio@editskills')->middleware('auth');;
Route::get('/delete_skill/{id}', 'App\Http\Controllers\Portfolio@delete_skill')->middleware('auth');;

Route::get('/education', 'App\Http\Controllers\Portfolio@education')->middleware('auth');;
Route::get('/add_education', 'App\Http\Controllers\Portfolio@add_education')->middleware('auth');;
Route::post('/save_education', 'App\Http\Controllers\Portfolio@saveducation')->middleware('auth');;
Route::get('/edit_education/{id}', 'App\Http\Controllers\Portfolio@edit_education')->middleware('auth');;
Route::post('/editeducation', 'App\Http\Controllers\Portfolio@editeducation')->middleware('auth');;
Route::get('/delete_education/{id}', 'App\Http\Controllers\Portfolio@delete_education')->middleware('auth');;

Route::get('/professional_exp', 'App\Http\Controllers\Portfolio@professional_experience')->middleware('auth');;
Route::get('/add_professionalexp', 'App\Http\Controllers\Portfolio@add_professionalexp')->middleware('auth');;
Route::post('/save_professionalexp', 'App\Http\Controllers\Portfolio@saveprofessionalexp')->middleware('auth');;
Route::get('/edit_professionalexp/{id}', 'App\Http\Controllers\Portfolio@edit_professionalexp')->middleware('auth');;
Route::post('/editprofessionalexp', 'App\Http\Controllers\Portfolio@editprofessionalexp')->middleware('auth');;
Route::get('/delete_professionalexp/{id}', 'App\Http\Controllers\Portfolio@delete_professionalexp')->middleware('auth');;

Route::get('/portfolio', 'App\Http\Controllers\Portfolio@portfolio')->middleware('auth');;
Route::get('/add_portfolio', 'App\Http\Controllers\Portfolio@add_portfolio')->middleware('auth');;
Route::post('/save_portfolio', 'App\Http\Controllers\Portfolio@saveportfolio')->middleware('auth');;
Route::get('/edit_portfolio/{id}', 'App\Http\Controllers\Portfolio@edit_portfolio')->middleware('auth');;
Route::post('/editportfolio', 'App\Http\Controllers\Portfolio@editportfolio')->middleware('auth');;
Route::get('/delete_portfolio/{id}', 'App\Http\Controllers\Portfolio@delete_portfolio')->middleware('auth');;


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index']);
