@extends('layouts.backend')
@section('content')

<button type="submit" id="btn" class="btn btn-warning">Novo Recado</button>

<table class="table table-striped table-hover" id="mytable">
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
            <th scope="row">10/05/2021</th>
            <td>Reunião 20/05/2021</td>
            <td>Ana Gomes</td>
            <!-- Botões -->
            <td>
                <button type="submit" id="btn" class="btn btn-primary">Ver Recado</button>
                <button type="submit" id="btn" class="btn btn-danger">Apagar Recado</button>
            </td>
        </tr>
        <tr>
            <th scope="row">13/05/2021</th>
            <td>Reunião 10/06/2021</td>
            <td>Joana Martins</td>
            <!-- Botões -->
            <td>
                <button type="submit" id="btn" class="btn btn-primary">Ver Recado</button>
                <button type="submit" id="btn" class="btn btn-danger">Apagar Recado</button>
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