@extends('layouts.vertical')

@section('titulo', 'Contactos')
@section('content')

<div class="msg">
    <!-- mensagens de alerta -->
    <?php if (isset($_GET['sucesso_alteraçao_contactos'])) { ?>
        <div style="width: 25%;  height:40px;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px ;border-radius:0.5rem">
           <b>O Contacto foi alterado com sucesso!</b>
        </div>
    <?php } ?>
    <?php if (isset($_GET['sucesso_criar_contacto'])) { ?>
        <div style="width: 30%;  height:40px;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
            <b>O contacto foi adicionado à lista com sucesso!</b>
        </div>
    <?php } ?>
    <?php if (isset($_GET['sucesso_delete_contacto'])) { ?>
        <div style="width: 25%;  height:40px;  padding: 0.5rem;background-color:green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
           <b>O contacto foi eliminado com sucesso!</b>
        </div>
    <?php } ?>
</div>

<div class="container" style="background-color:white;">
    <!-- CONTACTOS-->
    <h1 style="font-size:20px;color:black;">CONTACTOS URGENTES & OUTROS</h1>

    <table class="table table-striped table-hover" name="SOS" style="margin-bottom:50px;">
        <thead>
            <a class="btn btn-success" style="margin-bottom:10px;" href="/inicio/contactos/create_contacto"><b>+ ADICIONAR CONTACTO </b></a>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Contacto</th>
                <th scope="col">Alterações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactos as $contacto)
            <tr>
                <td> <input type="text" name="nome" value="{{$contacto->nome}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>> </td>
                <td> <input type="text" name="numero" maxlength="9" value="{{$contacto->numero}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>> </td>
                <td scope="row">
                    <form action="/inicio/contactos/destroy/{{$contacto->id}}" method="POST">
                        @csrf
                        <?php if (!isset($_GET['editar'])) { ?>
                            <a class="btn btn-primary" href="?editar=1"><b>Editar Perfil </b></a>
                        <?php } else { ?>
                            <a href="{{url('/inicio/contactos/update/' . $contacto->id)}}"> Guardar</a>
                        <?php } ?>
                        <button type="submit" class="btn btn-danger"><b>Apagar</b></button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>


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