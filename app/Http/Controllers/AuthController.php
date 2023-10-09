<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerUser(Request $request) {
        return $this->register($request, 'normal');
    }

    public function registerAdmin(Request $request) {
        return $this->register($request, 'admin');
    }


    public function register(Request $request, $userType = 'normal')
    {
        $validator = Validator::make($request->all(), [
            'user' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
        ], [
            'user.required' => 'El campo "user" es obligatorio.',
            'user.string' => 'El campo "user" debe ser una cadena de caracteres.',

            'email.required' => 'El campo "email" es obligatorio.',
            'email.string' => 'El campo "email" debe ser una cadena de caracteres.',
            'email.email' => 'El campo "email" debe ser una dirección de correo electrónico válida.',
            'email.unique' => 'El correo electrónico proporcionado ya está en uso.',

            'password.required' => 'El campo "password" es obligatorio.',
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'error',
                'details' => $validator->errors()->all(),
            ], 400);
        }

        $user = User::create([
            'user' => $request->user,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'userType' => $userType
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'success',
            'access_token' => $token,
            'data' => $user,
        ], 200);
    }

    public function login(Request $request) {
        if(!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'error',
                'details' => 'Unauthorized'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'success',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'data' => $user,
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'success',
            'details' => 'You have successfully logged out and the token was successfully deleted'
        ], 200);
    }
}
