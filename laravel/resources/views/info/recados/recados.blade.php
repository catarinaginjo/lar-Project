@extends('layouts.vertical')

@section('titulo', 'Recados')
@section('content')

<a href="{{'/'}}" class="btn btn-primary"><b>Novo Recado</b></a>

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
        <tr>
            <!-- A data do recado tem de ser a data do pc ao criar o recado-->
            <th scope="row">10/05/2021</th>
            <td>Reunião 20/05/2021</td>
            <td>Ana Gomes</td>
            <!-- Botões -->
            <td>
                <a href="{{'/inicio/recados/id'}}" class="btn btn-primary"><b>Ver Recado</b></a>
                <a href="{{'/'}}" class="btn btn-danger"><b>Apagar Recado</b></a>
            </td>
        </tr>
        <tr>
            <th scope="row">13/05/2021</th>
            <td>Reunião 10/06/2021</td>
            <td>Joana Martins</td>
            <!-- Botões -->
            <td>
                <a href="{{'/'}}" class="btn btn-primary"><b>Ver Recado</b></a>
                <a href="{{'/'}}" class="btn btn-danger"><b>Apagar Recado</b></a>
            </td>
        </tr>
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