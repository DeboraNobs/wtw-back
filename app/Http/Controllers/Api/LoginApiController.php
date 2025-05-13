<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginApiController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            return response()->json([
                'error' => 'Credenciales incorrectas'
            ], 401);
        }

        $usuario->tokens()->delete();

        $token = $usuario->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $usuario
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Sesión cerrada correctamente'
        ]);
    }
}






// namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use App\Models\Usuario;

// class LoginApiController extends Controller

// {

//     public function login(Request $request)
//     {
//         $usuario = Usuario::where('email', $request->email)->first();

//         if (!$usuario || !Hash::check($request->password, $usuario->password)) {
//             return response()->json(['error' => 'Credenciales no válidas'], 401);
//         }
//         $token = $usuario->createToken($usuario->email)->plainTextToken;

//         return response()->json([
//             'user' => $usuario,
//             'access_token' => $token,
//             'token_type'   => 'Bearer',
//         ]);
//     }


//     public function logout(Request $request)
//     {
//         $request->user()->currentAccessToken()->delete();

//         return response()->json(['message' => 'Sesión cerrada correctamente']);
//     }
// }

