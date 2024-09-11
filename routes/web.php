<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/users', [UserController::class, 'index'])->name('user.profile')->where('id', '[0-9]+');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('user.show');
    //Route::get('/posts', [PostController::class]);

    // ===== IMPLICIT BINDING, resolves models based on the route parameter
    //Route::get('/posts/{post}', [PostController::class, 'show']);
    // =====
});

Route::prefix('/')->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
});

Route::get('/restricted', function () {
    return 'Age Restricted';
})->middleware('check.age');


// Route::get('/users/{id}', function ($id) {
//     return 'User ID: ' . $id;})