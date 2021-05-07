<link href="{{ url('css/ementa.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Ementa semanal')

@section('content')
<div class="msg">
    <!-- mensagens de alerta -->
    <?php if (isset($_GET['sucesso_alteraçao_ementa'])) { ?>
        <div style="width: 25%;  height:40px;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
            <b>A ementa foi alterada com sucesso!</b>
        </div>
    <?php } ?>

</div>


<form action="/inicio/ementa/update-ementa/{{$ementa->id}}" method="POST" style="font-weight:bold;">
    @csrf
    <div class="container" id="data" style="text-align:center">

        <p> {{$ementa->data_inicio}}
            A {{$ementa->data_fim}} </p>

    </div>

    <div class="container" style="margin-bottom: 150px">
        <table class="table table-secondary table-hover" style="border-radius:0.5rem">
            <thead>
                <tr>
                    <th scope="col">Dia</th>
                    <th scope="col">Sopa</th>
                    <th scope="col">Prato - Almoço</th>
                    <th scope="col">Sobremesa - Almoço </th>
                    <th scope="col">Prato - Jantar</th>
                    <th scope="col">Sobremesa - Jantar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Segunda-feira</th>
                    <td>
                        <p> {{$ementa->seg_sopa}} </p>
                    <td>
                        <p> {{$ementa->seg_almoço}} </p>
                    <td>
                        <p>{{$ementa->seg_sob_almoço}}</p>
                    <td>
                        <p>{{$ementa->seg_jantar}}</p>
                    <td>
                        <p>{{$ementa->seg_sob_jantar}}</p>

                </tr>
                <tr>

                    <th scope="row">Terça-feira</th>
                    <td>
                        <p>{{$ementa->ter_sopa}} </p>
                    <td>
                        <p>{{$ementa->ter_almoço}} </p>
                    <td>
                        <p>{{$ementa->ter_sob_almoço}} </p>
                    <td>
                        <p>{{$ementa->ter_jantar}} </p>
                    <td>
                        <p>{{$ementa->ter_sob_jantar}} </p>

                </tr>
                <tr>

                    <th scope="row">Quarta-feira</th>
                    <td>
                        <p>{{$ementa->qua_sopa}}</p>
                    <td>
                        <p>{{$ementa->qua_almoço}} </p>
                    <td>
                        <p>{{$ementa->qua_sob_almoço}} </p>
                    <td>
                        <p>{{$ementa->qua_jantar}} </p>
                    <td>
                        <p>{{$ementa->qua_sob_jantar}} </p>

                </tr>
                <tr>
                    <th scope="row">Quinta-feira</th>
                    <td>
                        <p>{{$ementa->qui_sopa}} </p>
                    <td>
                        <p>{{$ementa->qui_almoço}} </p>
                    <td>
                        <p>{{$ementa->qui_sob_almoço}} </p>
                    <td>
                        <p>{{$ementa->qui_jantar}} </p>
                    <td>
                        <p>{{$ementa->qui_sob_jantar}} </p>

                </tr>
                <tr>

                    <th scope="row">Sexta-feira</th>
                    <td>
                        <p>{{$ementa->sex_sopa}}</p>
                    <td>
                        <p>{{$ementa->sex_almoço}} </p>
                    <td>
                        <p>{{$ementa->sex_sob_almoço}}</p>
                    <td>
                        <p>{{$ementa->sex_jantar}} </p>
                    <td>
                        <p>{{$ementa->sex_sob_jantar}} </p>
                </tr>
                <tr>

                    <th scope="row">Sábado</th>
                    <td>
                        <p>{{$ementa->sab_sopa}} </p>
                    <td>
                        <p>{{$ementa->sab_almoço}} </p>
                    <td>
                        <p>{{$ementa->sab_sob_almoço}}</p>
                    <td>
                        <p>{{$ementa->sab_jantar}} </p>
                    <td>
                        <p>{{$ementa->sab_sob_jantar}}</p>

                </tr>
                <tr>

                    <th scope="row">Domingo</th>
                    <td>
                        <p>{{$ementa->dom_sopa}}</p>
                    <td>
                        <p>{{$ementa->dom_almoço}} </p>
                    <td>
                        <p>{{$ementa->dom_sob_almoço}} </p>
                    <td>
                        <p>{{$ementa->dom_jantar}}</p>
                    <td>
                        <p>{{$ementa->dom_sob_jantar}}</p>

                </tr>
            </tbody>
        </table>

        <h2 style="font-size:20px">Informações adicionais à ementa:</h2>

        <div class="info">
            <textarea style="width:700px;height:200px;border-radius:0.5rem"> {{$ementa->info}} </textarea>
        </div>

        <p style=" margin-top:20px; font-size:20px">Ementa criada por:</p>
        <div>
            <input type="text" name="nutricionista" value="{{$ementa->nutricionista}}" style="width:400px;height:50px;border-radius:0.5rem">
        </div>

    </div>
    <button style="float:right" type="submit" class="btn btn-success"><b>Guardar alterações</b></button>
</form>


@endsection

<style>
    th,
    td {
        border: 1px solid black;
    }

    p {
        font-size: 20px;
    }
</style>