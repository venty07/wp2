<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get ('helloword', [hellowordcontroller::class,'index']); 