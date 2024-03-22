<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return "Hellow ! Wellcome to laravel " . app()->version();
});


// les routes pour l'authentification
// Routes nécessitant que l'utilisateur ne soit pas authentifié
// Routes d'inscription
// Route de connexion
// Route de réinitialisation

Route::get("register", function(){
    return "register";
});






// Les nécéssitant que l'utilisateur soit authentifié

/**
 * route de verification d'email
 * route de confirmation
 */