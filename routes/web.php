<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    [PostController::class, 'index']
);

Route::get(
    "/posts/{post:slug}",
    [PostController::class, 'show']
);

Route::get(
    '/categories/{category:slug}',
    [PostController::class, 'category']
);

Route::get(
    '/postsby/{author:username}',
    [PostController::class, 'author']
);

Route::get(
    '/register',
    [AuthController::class, 'create']
);

Route::get(
    '/login',
    [AuthController::class, 'login']
);
