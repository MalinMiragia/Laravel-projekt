<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/posts', 'PostController@index');
// Route::get('/subjects/{id}', 'PostController@create')->middleware('auth');
// Route::post('/subjects', 'PostController@store')->middleware('auth');
// Route::get('/subjects/{id}', 'PostController@show');
// Route::delete('/subjects/{id}', 'PostController@destroy')->middleware('auth');
// Route::get('/subjects/editsubject/{id}', 'PostController@edit')->middleware('auth');
// Route::post('/subject/{id}', 'PostController@update')->middleware('auth);

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');


Route::get('/subjects', 'SubjectController@index');
Route::get('/subjects/createsubject', 'SubjectController@create')->middleware('auth');
Route::post('/subjects', 'SubjectController@store')->middleware('auth');
Route::get('/subject/{id}', 'SubjectController@show');
Route::delete('/subjects/{id}', 'SubjectController@destroy')->middleware('auth');
Route::get('/subjects/editsubject/{id}', 'SubjectController@edit')->middleware('auth');
Route::post('/subjects/{id}', 'SubjectController@update')->middleware('auth');

//Route::get('/subjects', 'UserController@index');

Route::get('/users/{id}', 'UserController@show');

// Route::get('/newpost/{id}', 'SubjectController@show');