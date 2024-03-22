<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return "Hellow ! Wellcome to laravel " . app()->version();
});


// les routes pour l'authentification
/**
 * Routes nécessitant que l'utilisateur ne soit pas authentifié
 * Routes d'inscription
 * Route de connexion
 * Route de réinitialisation
 */

/**Route d'enregistrement */
//Formulaire d'inscription
Route::get("register", [RegisterController::class, 'create']);

//Formulaire soumission
Route::get("register", [RegisterController::class, 'store']);

/**Route de connexion */
Route::get("login");

/**Route pour mot de passe oublié */
Route::get("forgot-password", function(){});

/**Route pour réinitialiser le mot de passe  */
Route::get("reset-password", function(){});






// Les nécéssitant que l'utilisateur soit authentifié
/**
 * route de verification d'email
 * route de confirmation
 */