@extends('layouts.vertical')
@section('titulo', 'Criar Funcionário')
@section('content')

<table class="table table-secondary ">
    <thead>
        <tr>
            <th scope="row">Nome</th>
            <th scope="col">Apelido</th>
            <th scope="row">Cargo</th>
            <th scope="row">Contacto</th>
            <th scope="row">E-mail</th>
            <th scope="row">Username</th>
            <th scope="row">Morada</th>
            <th scope="row">Localidade</th>
            <th scope="row">Data de nascimento</th>
            <th scope="row">Fotografia</th>
            <th scope="row">Password</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        
            <form action="{{url('/inicio/funcionarios/store_funcionario')}}" method="POST" style="font-weight:bold;" enctype="multipart/form-data">
                @csrf
                <th scope="row"> <input type="text" name="nome"></th>
                <td> <input type="text" name="apelido"></td>
                <td> <input type="text" name="cargo"></td>
                <td> <input type="text" name="contacto"></td>
                <td> <input type="text" name="email"></td>
                <td> <input type="text" name="username"></td>
                <td><input type="text" name="morada"></td>
                <td><input type="text" name="localidade"></td>
                <td> <input type="date" name="data_nascimento"></td>
                <td><input type="file" name="pic"></td>
                <td> <input type="text" name="password"> </td>
                <button type="submit" id="mybtn" class="btn btn-success" style="margin-bottom:10px"><b>Criar Funcionário</b></button>
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


