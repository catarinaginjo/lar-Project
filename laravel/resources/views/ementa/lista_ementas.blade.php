@extends('layouts.vertical')
@section('titulo', 'Lista de Ementas')
@section('content')

<?php
if (isset($_GET['sucesso_delete_ementa'])) { ?>
    <div style="width: 27%; height:40px; padding: 0.5rem;background-color:green;color:white; margin-bottom:20px; ;border-radius:0.5rem">
        <b>A ementa foi eliminada com sucesso.</b>
    </div>
<?php }
if (isset($_GET['sucesso_criar_ementa'])) { ?>
    <div style="width: 25%; height:40px; padding: 0.5rem;background-color:green;color:white; margin-bottom:20px;;border-radius:0.5rem">
        <b> A ementa foi criada com sucesso.</b>
    </div>
<?php } ?>
<div class="btn">
    <a class="btn btn-success" style="margin-bottom:10px;" href="/inicio/ementa/create-ementa"><b>+ NOVA EMENTA </b></a>
</div>

<div style="background-color:white">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Ementa</th>
                <th scope="col">Data de inicio</th>
                <th scope="col">Data de fim</th>
                <th scope="col"> </th>


            </tr>
        </thead>
        <tbody>
            @foreach($ementas as $ementa)
            <tr>
                <th scope="row">{{$ementa->id }} </th>
                <td>{{$ementa->data_inicio }} </td>
                <td>{{$ementa->data_fim }} </td>
                <td>
                    <form action="/inicio/ementa/destroy/{{$ementa->id}}" method="POST">
                        @csrf
                        <a class="btn btn-primary" href="{{url('/inicio/lista-ementas/show/' . $ementa->id)}}"> <b>Ver</b></a>
                        <button type="submit" class="btn btn-danger"><b>Apagar Ementa</b></button>
                    </form>
                </td>


            </tr>
            @endforeach

        </tbody>
    </table>
</div>


@endsection