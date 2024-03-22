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

    public function store(){
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
    // 200 201 301 302 401 403 404 
}
