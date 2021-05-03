@extends('layouts.vertical')

@section('titulo', 'Recados')
@section('content')
<div class="msg">
    <!-- mensagens de alerta -->
    <?php if (isset($_GET['sucesso_alteraçao_recado'])) { ?>
        <div style="width: 25%;  height:40px;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
           <b>O Recado foi alterado com sucesso!</b>
        </div>
    <?php } ?>
    <?php if (isset($_GET['sucesso_criar_recado'])) { ?>
        <div style="width: 30%;  height:40px;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
            <b>O Recado foi adicionado à lista com sucesso!</b>
        </div>
    <?php } ?>
    <?php if (isset($_GET['sucesso_delete_recado'])) { ?>
        <div style="width: 25%;  height:40px;  padding: 0.5rem;background-color:green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
           <b>O Recado foi eliminado com sucesso!</b>
        </div>
    <?php } ?>
</div>

<a href="{{'/inicio/recados/create_recado'}}" class="btn btn-success"><b>+ NOVO RECADO</b></a>

<table class="table table-secondary table-hover" id="mytable">
    <thead>
        <tr>
            <th scope="col">Data do recado</th>
            <th scope="col">Assunto</th>
            <th scope="col">Responsável</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recados as $recado)
        <tr>
            <!-- A data do recado tem de ser a data do pc ao criar o recado-->
            <th scope="row">{{$recado->created_at}}</th>
            <td>{{$recado->assunto}}</td>
            <td>{{$recado->responsavel}}</td>
            <!-- Botões -->
            <td>
                <form action="/inicio/recados/destroy/{recado}" method="POST">
                    @csrf
                    <a href="{{'/inicio/recados/{recado}'}}" class="btn btn-primary"><b>Ver Recado</b></a>
                    <button type="submit" class="btn btn-danger"><b>Apagar recado</b></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

<style>
    #btn {
        font-weight: bold;
    }

    #mytable {
        margin-top: 80px;
    }
</style>