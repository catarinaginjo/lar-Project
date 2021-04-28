@extends('layouts.vertical')

@section('titulo', 'Contactos')
@section('content')

<div class="container" style="background-color:white;">
<form action="/inicio/contactos/update/{{$contactos->id}}" method="POST" id="alterar-perfil" class="input-grouphideBox">
        {{ csrf_field() }}

    <!-- CONTACTOS-->
    <h1 style="font-size:20px;margin-bottom:20; color:black; margin-top:30px">CONTACTOS URGENTES & OUTROS</h1>

    <table class="table table-striped table-hover" name="SOS" style="margin-bottom:50px;">
        <thead>
            <a class="btn btn-primary" style="margin-bottom:10px;" href="/inicio/contactos/create_contacto"><b>Criar Contacto </b></a>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Contacto</th>
                <th scope="col">Alterações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactos as $contacto)
            <tr>
                <td> <input type="text" name="nome"  value="{{$contacto->nome}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>> </td>
                <td> <input type="text" name="numero" maxlength="9" value="{{$contacto->numero}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>> </td>
                <td scope="row">
                    <!-- dentro de action colocar a rota de apagar contacto com x ID-->
                    <form action="/inicio/contactos/destroy/{contacto}" method="POST">
                        @csrf
                        <a class="btn btn-success" href="inicio/contactos/edit/{contacto}"><b>Editar</b></a>
                        <?php if (!isset($_GET['editar'])) { ?>
                            <a class="btn btn-primary" href="?editar=1">Editar Perfil </a>
                        <?php } else { ?>
                            <input type="submit" name="save" value="Guardar" id="save">
                        <?php } ?>
                        <button type="submit" class="btn btn-danger"><b>Apagar</b></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </form>

    <!-- FUNCIONÁRIOS E GESTORES -->
    <h1 style="font-size:20px;margin-bottom:20px;color:black">FUNCIONÁRIOS & GESTORES</h1>

    <table class="table table-striped table-hover" name="funcionarios" style="margin-bottom:50px;">

        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
                <th scope="col">Contacto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->nome}} {{$user->apelido}}</td>
                <td>{{$user->cargo}}</td>
                <td>{{$user->contacto}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

<style>
    .button {
        color: white;
        font-family: 'Roboto', sans-serif;
    }
</style>