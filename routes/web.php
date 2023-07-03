<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/categories/{id}/post-count', [PostController::class, 'totalPostInCategory']);
Route::get('/posts/{id}/delete', [PostController::class, 'deletePost']);
Route::get('/posts/deleted', [PostController::class, 'showDeletedPosts']);

Route::get('/categories/{id}/posts', [CategoryController::class, 'showPosts']);
Route::get('/categories/{id}/latest-post', [CategoryController::class, 'latestPost']);
Route::get('/categories/latest-posts', [CategoryController::class, 'latestPosts']);
