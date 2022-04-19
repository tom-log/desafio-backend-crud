<?php

namespace App\Http\Controllers;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TokenController extends Controller
{
    public function gerarToken(Request $request): \Illuminate\Http\JsonResponse|array
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $usuario = User::where('email', $request->email)->first();

        if (is_null($usuario)
            || !Hash::check($request->password, $usuario->password))
        {
            return response()->json('Usuário ou senha inválido', 401);
        }

        $token = JWT::encode(
            ['email' => $request->email],

            env('JWT_SECRET'), 'HS256'
        );

        return [
            'access_token' => $token
        ];
    }
}


