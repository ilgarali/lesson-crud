<?php

use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::post('/store', [CategoryController::class, 'store'])->name('storeCategory');
Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('editCategory');
Route::put('/udpate/{id}',[CategoryController::class,'update'])->name('updateCategory');;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/delete/{id}', [PostController::class, 'delete'])->name('posts.delete');
