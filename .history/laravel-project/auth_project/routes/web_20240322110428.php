<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return "Hellow ! Wellcome to laravel " . app()->version();
});
