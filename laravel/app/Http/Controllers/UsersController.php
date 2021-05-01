<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

//Controlador destinado aos funcionários e gestores (utilizadores)

class UsersController extends Controller
{
    //lista de funcionarios
    public function show_funcionarios()
    {
        $user = User::all(); //vai ao modelo e ve os users
        return view('funcionarios.lista_funcionarios')->with('user', $user); //recebe dentro de 'user' todos os utilizadores da bd
    }

    /*
    public function show_funcionarios()
    {
        $user = User::all(); //vai ao modelo e ve os users
        if (!($user->cargo = "ab")) {
            return view('funcionarios.lista_funcionarios')->with('user', $user); //recebe dentro de 'user' todos os utilizadores da bd
        }
        else {
            echo "not found";
        }
    }*/


    //lista de funcionarios e gestores
    public function show_users()
    {
        $user = User::all(); //vai ao modelo e ve os users
        return view('funcionarios.lista_funcionarios')->with('user', $user); //recebe dentro de 'user' todos os utilizadores da bd
    }

    public function show_perfil()
    {
        $user = User::all(); //vai ao modelo e ve os users
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
        $data = $request->all();
        
        $validator = Validator::make($data, [
            'nome' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'morada' => 'required|string|max:255',
            'username' => 'string|max:255',
            'email' => 'required|email|string|max:255',
            'localidade' => 'required|string|max:255',
            'password' => 'string',
            'contacto' => 'required|max:9'
        ]);
    
        $user = User::create($data);
  
        //guarda a fotografia
       if ($request->hasFile('foto')) {
            $request->file('foto')->storeAs('public/images/users/', $user->id . '.png');
        }
        
       

        return redirect('/inicio/lista_funcionarios'); //vai ser redirecionada para o 'index'

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('funcionarios.show_funcionario')->with('user', $user); //dá o utente com este ID
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
