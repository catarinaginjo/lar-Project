
@extends('layouts.vertical')
@section('titulo', 'Criar Utente')
@section('content')

<table class="table table-secondary ">
    <thead>
        <tr>
            <th scope="row">Nome</th>
            <th scope="col">Apelido</th>
            <th scope="row">Contacto Familiar</th>
            <th scope="row">Morada</th>
            <th scope="row">Localidade</th>
            <th scope="row">Doença(s)</th>
            <th scope="row">Condição</th>
            <th scope="row">Alergia</th>
            <th scope="row">Medicação</th>
            <th scope="row">Data de nascimento</th>
            <th scope="row">Fotografia</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <form action="{{url('/inicio/store_utente')}}" method="POST" style="font-weight:bold;" enctype="multipart/form-data">
                @csrf
                <th scope="row"> <input type="text" name="nome"></th>
                <td> <input type="text" name="apelido"></td>
                <td> <input type="text" name="contacto_familiar"></td>
                <td><input type="text" name="morada"></td>
                <td><input type="text" name="localidade"></td>
                <td><input type="text" name="doenças"></td>
                <td><input type="text" name="condiçao"></td>
                <td><input type="text" name="alergia"></td>
                <td> <input type="text" name="medicaçao"> </td>
                <td> <input type="date" name="data_nascimento"></td>
                <td><input type="file" name="pic"></td>
                <button type="submit" id="mybtn" class="btn btn-primary">Criar Utente</button>
            </form>


            <!-- Gera mensagem de erro caso algum campo não esteja correto (relativamente as validações no controller)-->
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>UPS!</strong>Erros com os dados que forneceu.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </tr>
    </tbody>
</table>

@endsection


