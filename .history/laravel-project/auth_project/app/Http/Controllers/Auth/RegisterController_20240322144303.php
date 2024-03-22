<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        return view("auth.register");
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required",
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);
        return response()->json($user, 201);
    }
    // 200 201 301 302 401 403 404 500
    /**
     * 401 : unauthorized (obligé de s'authentifier)
     *  403 : Forbidden : (déjà connecté, mais ses accès sont restreints)
     * 404: Not found : le serveur n'a pas trouver le fichier ou la ressource demandée
     * 500 - 599
     * 500 : Internal Server Error:le serveur à un problème qu'il ne peut traiter
     */
}
