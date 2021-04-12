<?php

namespace App\Http\Controllers\API;


use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
            'data_nascimento' => 'required|date',
            'morada' => 'required|string|max:255',
            'localidade' => 'required|string|max:255',
            'cargo' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'contacto' => 'required|max:9'
        ]);

        //se os dados fornecidos não estão válidos, aparece uma mensagem de erro
        if($validator->fails()){
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        //senão, cria um utente
        $user = User::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response(['message' => 'Utente eliminado.']);
    
    }
}
