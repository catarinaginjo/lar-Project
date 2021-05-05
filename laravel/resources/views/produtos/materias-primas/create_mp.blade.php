@extends('layouts.vertical')
@section('titulo', 'Novo registo')
@section('content')

<div class="" style="background-color:white">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Data de receção</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Nºfatura</th>
                <th scope="col">Lote</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><textarea name="data_receçao"> </textarea>
                <td><textarea name="fornecedor"></textarea>
                <td><textarea name="num_fatura"> </textarea>
                <td><textarea name="data_receçao"></textarea>
            </tr>
        </tbody>
    </table>
</div>

<div class="" style="background-color:white">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Designação</th>
                <th scope="col">Higiente no transporte</th>
                <th scope="col">Peso (kg)</th>
                <th scope="col">Aspeto embalagem e/ou produto</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> <textarea name="product_id"> </textarea>
                <td><textarea name="higiene"> </textarea>
                <td><textarea name="peso"> </textarea>
                <td><textarea name="aspeto"> </textarea>
            </tr>
        </tbody>
    </table>
</div>

<div class="" style="background-color:white">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Data de validade</th>
                <th scope="col">Temperatura ºC</th>
                <th scope="col">Ações corretivas</th>
                <th scope="col">Responsável pelo registo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><textarea name="data_val"> </textarea>
                <td><textarea name="temperatura"> </textarea>
                <td><textarea name="açoes_corretivas"> </textarea>
                <td><textarea name="responsavel"> </textarea>
            </tr>
        </tbody>
    </table>
</div>

<form action="{{url('/inicio/controlo_materias_primas/store')}}" method="POST" style="font-weight:bold;">
    @csrf
    <button type="submit" class="btn btn-success" style="margin-top:20px; margin-bottom:20px;font-size:20px;font-weight:bold;">Submeter Registo</button>
</form>


@endsection