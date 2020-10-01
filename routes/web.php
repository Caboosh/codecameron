<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\Dashboard\PostsController as Admin_PostsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Frontend Posts Routes
Route::get('/blog', [PostsController::class, 'index'])->name('posts.index');
Route::get('/blog/posts/{id}', [PostsController::class, 'show'])->name('posts.show');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Backend Posts CRUDE Routes
Route::get('dashboard/posts', [Admin_PostsController::class, 'index'])->name('admin.posts.index');

Route::get('dashboard/posts/create', [Admin_PostsController::class, 'create'])->name('admin.posts.create');
Route::post('dashboard/posts/create', [Admin_PostsController::class, 'store'])->name('admin.posts.store');

Route::get('dashboard/posts/edit/{id}', [Admin_PostsController::class, 'edit'])->name('admin.posts.edit');
Route::put('dashboard/posts/edit/{id}', [Admin_PostsController::class, 'update'])->name('admin.posts.update');

Route::post('dashboard/posts/{id}/delete', [Admin_PostsController::class, 'destroy'])->name('admin.posts.destroy');

Route::get('dashboard/posts/trash', [Admin_PostsController::class, 'trash'])->name('admin.posts.trash');
Route::post('dashboard/posts/trash/{id}/restore', [Admin_PostsController::class, 'restore'])->name('admin.posts.restore');
Route::post('dashboard/posts/trash/{id}/delete', [Admin_PostsController::class, 'eradicate'])->name('admin.posts.eradicate');