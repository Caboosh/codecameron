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

// Frontend Posts Routes
Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Backend Posts CRUDE Routes
Route::get('dashboard/posts', 'Dashboard/PostsController@index');

Route::get('dashboard/posts/create', 'Dashboard/PostsController@create');
Route::post('dashboard/posts/create', 'Dashboard/PostsController@store');

Route::get('dashboard/posts/edit/{id}', 'Dashboard/PostsController@edit');
Route::put('dashboard/posts/edit/{id}', 'Dashboard/PostsController@update');

Route::post('dashboard/posts/{id}/delete', 'Dashboard/PostsController@destroy');

Route::get('dashboard/posts/trash', 'Dashboard/PostsController@trash');
Route::post('dashboard/posts/trash/{id}/restore', 'Dashboard/PostsController@restore');
Route::post('dashboard/posts/trash/{id}/delete', 'Dashboard/PostsController@eradicate');