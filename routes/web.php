<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;

Route::get('/', [PostsController::class, 'index'])->name('home');
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{post}', [PostsController::class, 'show']);
Route::post('/posts', [PostsController::class, 'store']);
Route::post('/posts/{post}/comments', [CommentsController::class, 'store']);
Route::get('/posts/tags/{tag}', [TagsController::class, 'index']);

Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);
Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);
Route::get('/logout', [SessionsController::class, 'destroy']);
