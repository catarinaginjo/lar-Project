<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'data_nascimento' => 'date',
            'morada' => 'string|max:255',
            'username' => 'string|max:255',
            'localidade' => 'string|max:255',
            'contacto' => 'required|numeric',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5',
        ]);

        $user = User::create([
            'nome' => $request->nome,
            'apelido' => $request->apelido,
            'email' => $request->email,
            'contacto' => $request->contacto,
            'cargo' => $request->cargo,
            'username' => ' ',
            'data_nascimento' => $request->data_nascimento,
            'localidade' => ' ',
            'morada' => ' ',
            'password' => Hash::make($request->password),
        ]);


        event(new Registered($user));

        //guarda a fotografia
        if ($request->hasFile('foto')) {
            $request->file('foto')->storeAs('public/images/users/', $user->id . '.png');
        }

        return redirect('/inicio/lista_funcionarios'); //vai ser redirecionada para o 'index'
    }
}
