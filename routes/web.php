<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', [HelloWorldController::class, 
'index']);

Route::get('ambilfile', [HelloWorldcontroller::class,
'ambilfile']);

Route::get('getlorem', [HelloWorldController::class,
'getlorem']);