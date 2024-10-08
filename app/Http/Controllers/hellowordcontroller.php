<?php

namespace app\http\controllers;

use Illuminate \http\Request;

class hellowordcontrollers extend controllers
{
    //
}
<?php
namespace app\http\contollers;
use Illuminate\http\request;

class hellowordcontrollers extends controller
{
    public function index()
    {
        return "selamat belajar framework laravel 10";
    }
}

<?php
use Illuminate\facades\route;
use app\http\controllers\hellowordcontroller;

Route::get('/', function () {
    return view('welcome');
});

route::get('helloword', [hellowordcontroller:: class, 'indesx']),
   

