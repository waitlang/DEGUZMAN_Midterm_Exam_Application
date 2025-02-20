<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user/{id}', [ProductController::class, 'show']);

Route::get('/', function () {
    return view('welcome', ['page' => 'GadgetBahns']);
});
