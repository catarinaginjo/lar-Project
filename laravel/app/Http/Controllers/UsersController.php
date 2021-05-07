<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;


//Controlador destinado aos funcionários e gestores (utilizadores)

class UsersController extends Controller
{
    //lista de cozinheiros/auxiliares
    public function show_funcionarios()
    {
        $cargos_permitidos = ['Auxiliar', 'Cozinheira'];

        $user = User::where('cargo', $cargos_permitidos)->get();

        return view('funcionarios.lista_funcionarios')->with('user', $user);
    }

    //admin, superadmin, auxiliar, cozinheiro
    public function show_all_funcionarios()
    {
        $user = User::all();
        return view('funcionarios.lista_funcionarios')->with('user', $user); //recebe dentro de 'user' todos os utilizadores da bd
    }

    public function show(User $user)
    {
        return view('funcionarios.show_funcionario')->with('user', $user); //dá o utente com este ID
    }


    public function show_perfil(User $user)
    {
        $user = User::find($user->id); //vai ao modelo e ve os users
        return view('perfil')->with('user', $user); //recebe dentro de 'user' todos os utilizadores da bd
    }


    public function create()
    {
        return view('funcionarios.criar_funcionario');
    }

    public function create_all()
    {
        return view('auth.register');
    }

    public function store_all(Request $request)
    {

        $request->validate([
            'nome' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'email' => 'required|email|string|unique|max:255',
            'password' => 'string',
            'contacto' => 'required|max:9|unique'
        ]);

        $user = User::create([
            'nome' => $request->nome,
            'apelido' => $request->apelido,
            'cargo' =>  $request->cargo,
            'email' => $request->email,
            'contacto' => $request->contacto,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        //guarda a fotografia
        if ($request->hasFile('foto')) {
            $request->file('foto')->storeAs('public/images/users/', $user->id . '.png');
        }

        return redirect('/inicio/lista_funcionarios'); //vai ser redirecionada para o 'index'
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'nome' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'morada' => 'required|string|max:255',
            'username' => 'string|max:255',
            'email' => 'required|email|string|unique|max:255',
            'localidade' => 'required|string|max:255',
            'password' => 'string',
            'contacto' => 'required|max:9|unique'
        ]);

        $user = User::create($data);

        //guarda a fotografia
        if ($request->hasFile('foto')) {
            $request->file('foto')->storeAs('public/images/users/', $user->id . '.png');
        }

        return redirect('/inicio/lista_funcionarios'); //vai ser redirecionada para o 'index'
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = User::find($user->id);
        $user->update($request->all());
        $user->save();

        return redirect('/inicio/funcionarios/' . $user->id . '/?sucesso_alteraçao_utilizador=1');
    }

    public function update_perfil(Request $request, User $user)
    {
        $user = Auth::user()::find($user->id);
        $user->update($request->all());
        $user->save();

        return redirect('inicio/perfil/ ' . $user->id . '?sucesso=1');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\superadmin  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        $user->delete_foto_from_storage();
        return redirect('/inicio/lista_funcionarios/?sucesso_destroy_utilizador=1');
    }
}
