<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthApiController extends Controller
{
    public function login(Request $request){
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!Auth::attempt($request->only('email','password'))){
            return response()->json(['mensagem'=>'E-mail ou senha inválida'],401);
        }

        $usuario = Auth::user();

        $token = $usuario->createToken('api-token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'usuario' => $usuario
        ]);        

    }

    public function logout(Request $request){

     
        $request->user()->currentAccessToken()->delete(); 
     
        return response()->json([
            'mensagem'=> 'Logout Realizado'
        ]);
    }

}
