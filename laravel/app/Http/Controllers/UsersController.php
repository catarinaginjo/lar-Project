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
    //se for apenas admin pode ver: lista de cozinheiros/auxiliares
    public function show_funcionarios()
    {
        $cargos_permitidos = ['Auxiliar', 'Cozinheira', 'Cozinheiro'];

        $user = User::whereIn('cargo', $cargos_permitidos)->get();

        return view('funcionarios.lista_funcionarios')->with('user', $user);
    }

    //se for superadmin pode ver: admin, superadmin, auxiliar, cozinheiro
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

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'morada' => 'required|string|max:255',
            'username' => 'string|unique:users|max:255',
            'email' => 'required|email|string|unique:users|max:255',
            'localidade' => 'required|string|max:255',
            'password' => 'string',
            'contacto' => 'required|numeric|unique:users'
        ]);

        $user = User::create([
            'nome' => $request->nome,
            'apelido' => $request->apelido,
            'email' => $request->email,
            'contacto' => $request->contacto,
            'cargo' => $request->cargo,
            'username' => $request->username,
            'data_nascimento' => $request->data_nascimento,
            'localidade' => $request->localidade,
            'morada' => $request->morada,
            'password' => Hash::make($request->password),
        ]);
        //guarda a fotografia
        if ($request->hasFile('foto')) {
            $request->file('foto')->storeAs('public/images/users/', $user->id . '.png');
        }

        if(Auth::user()->cargo =='SuperAdmin'){
            return redirect('/inicio/superadmin/lista_funcionarios'); //vai ser redirecionada para o 'index'
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
