<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        // App::setLocale('fr');
        try {
            $validated = $request->validate(
                [
                    "test" => "required|string",
                    "name" => "required|string",
                    "email" => "required|email",
                    "password" => "required|string|confirmed",
                ]

            );

            $user = $validated::create([
                // "name" => $request->name,
                // "email" => $request->email,
                // "password" => $request->password,
            ]);

            // return response()->json([$validated, 201]);
            return response()->json(
                [
                    "succes" => false,
                    "data" => $user,
                    "message" => "Votre formulaire a bien été reçu"
                ],
                201
            );
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                "message" => "Une erreur s'est produite",
                "errors" => $e->validator->errors()->messages()
            ], 422);
        }


        // $user = User::create([
        //     "name" => $request->name,
        //     "email" => $request->email,
        //     "password" => $request->password,
        // ]);
        // return response()->json($user, 201);
    }










    // 200 : ajouter une ressoure 201 301 302 401 403 404 500
    /**
     * 204 : ok mais aucun contenu dans la réponse
     * 301 : redirection permanente
     * 302 : la route est changée mais temporairement
     * 401 : unauthorized (obligé de s'authentifier)
     * 403 : Forbidden : (déjà connecté, mais ses accès sont restreints)
     * 404: rien n'est trouvé - Not found : le serveur n'a pas trouver le fichier ou la ressource demandée
     * 419 :
     * 500 - 599
     * 500 : Internal Server Error:le serveur à un problème qu'il ne peut traiter
     */
}
