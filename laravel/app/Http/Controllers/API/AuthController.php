<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //metodo de registo
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed',

            /*'apelido' => 'required|max:55',
            'username' => 'required|max:55',
            'contacto' => 'required|number|max:9',
            'cargo' => 'required|string',
            'data_nascimento' => 'required|date',
            'localidade' =>*/
        ]);

        //encriptação da password
        $validatedData['password'] = Hash::make($request->password);

        $user = User::create($validatedData);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user' => $user, 'access_token' => $accessToken], 201);
    }

    //metodo de login
    public function login(Request $request)
    {
        //validação dos dados fornecidos
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        //se os dados não correspondem a nenhum user, aparece a seguinte mensagem:
        if (!auth()->attempt($loginData)) {
            return response(['message' => 'As credenciais fornecidas são inválidas.'], 400);
        }

        //se o user existe, retorna o user e o seu access token.
        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response(['user' => auth()->user(), 'access_token' => $accessToken]);
    }
}
