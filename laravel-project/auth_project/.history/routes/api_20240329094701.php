<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return "Hellow ! Wellcome to laravel " . app()->version();
});

Route::get("register", [RegisterController::class, 'create']);

Route::post("register", [RegisterController::class, 'store']);

Route::get("login");

Route::get("forgot-password", function(){});

Route::get("reset-password", function(){});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
