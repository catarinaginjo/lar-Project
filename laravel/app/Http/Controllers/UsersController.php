<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

//Controlador destinado aos funcionários e gestores

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('funcionarios.lista_funcionarios');
        $user = User::all(); //vai ao modelo e ve as utentes
        return view('funcionarios.lista_funcionarios')->with('users', $user); //recebe dentro de 'utentes' todos os utentes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionarios.create_funcionario');
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
            //falta a fotografia
        ]);
        /*
        if ($request->hasFile('logo')) {
            $request->file('logo')->storeAs('public/images/frutarias/', $frutaria->id . '.png');
        }*/

        //se os dados fornecidos não estão válidos, aparece uma mensagem de erro
        if ($request->fails()) {
            return response(['error' => $request->errors(), 'Validation Error']);
        }

        //senão, cria um funcionario
        $user = User::create($data);

        return redirect('/inicio/funcionarios'); //vai ser redirecionada para o 'index'

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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\superadmin  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
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
        //
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
        return redirect('funcionarios.lista_funcionarios');
        //return redirect('/utentes?sucesso_destroy_user=1');
    }
}
