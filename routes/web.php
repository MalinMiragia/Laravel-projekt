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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/posts', 'PostController@index');
// Route::get('/posts/create', 'PostController@create');
// Route::post('/posts', 'PostController@store');
// Route::get('/posts/{id}', 'PostController@show');
// Route::delete('/posts/{id}', 'PostController@destroy');
// Route::get('/posts/edit/{id}', 'PostController@edit');
// Route::post('/posts/{id}', 'PostController@update');

// Route::get('/post', 'CommentController@index');
// Route::get('/posts/create', 'CommentController@create');
// Route::post('/posts', 'CommentController@store');
// Route::get('/posts/{id}', 'CommentController@show');

// Route::get('/subjects', 'SubjectController@index');
// Route::get('/subjects/createsubj', 'SubjectController@create');
// Route::post('/subjects', 'SubjectController@store');
// Route::get('welcome', 'SubjectController@show');
// Route::delete('/subjects/{id}', 'SubjectController@destroy');
// Route::get('/subjects/editsubj/{id}', 'SubjectController@edit');
// Route::post('/subjects/{id}', 'SubjectController@update');

//Route::get('/subjects', 'UserController@index');

Route::get('/users/{id}', 'UserController@show');