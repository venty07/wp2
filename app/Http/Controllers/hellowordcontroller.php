<?php 

use app\httpcontrollers;

use uminate\http\request;

class hellowordcontroller extends controller
{
    public function index()
    {
        return "selamat belajar laravel";
    }
}

