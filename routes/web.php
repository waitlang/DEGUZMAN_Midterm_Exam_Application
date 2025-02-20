<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\GreetController;

Route::get('/user/{id}', [ProductController::class, 'show']);

Route::get('/', function () {
    return view('welcome', ['page' => 'GadgetBahns']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hi';
});

// calls the greetMethod of the GreetController class
Route::get(
    '/greet', 
    [GreetController::class, 'greetMethod']
);

Route::get('{value}', function ($value) {
    return "Accepted: " . $value;
});


Route::resource('items', ProductController::class);