@extends('layouts.vertical')
@section('titulo', 'Novo registo')
@section('content')


@if ($errors->any())
<div class="alert alert-danger">
    <strong>UPS!</strong>Erro com os dados que forneceu.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<p>Os campos com * são obrigatórios;</p>
<p>Os campos com # têm de ser números;</p>
<div>
<p>__________________________________________</p>
  <p> C - conforme </p>
  <p> NC - não conforme </p>
  <p> D - devolvido </p>
</div>

<form action="{{url('/inicio/controlo_materias_primas/store')}}" method="POST" style="font-weight:bold;">
    @csrf
    <div class="" style="background-color:white">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Data de receção*</th>
                    <th scope="col">Fornecedor*</th>
                    <th scope="col"># Nºfatura*</th>
                    <th scope="col"># Lote *</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><input type="date" name="data_receçao"> </input>
                    <td><textarea name="fornecedor"></textarea>
                    <td><textarea name="num_fatura"> </textarea>
                    <td><textarea name="lote"> </textarea>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="" style="background-color:white">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Designação*</th>
                    <th scope="col">Higiente no transporte*</th>
                    <th scope="col"># Peso (kg)</th>
                    <th scope="col">Aspeto embalagem e/ou produto*</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> <textarea name="nome_produto"> </textarea>
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
                    <th scope="col">Data de validade*</th>
                    <th scope="col"># Temperatura ºC</th>
                    <th scope="col">Ações corretivas*</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><input type="date" name="data_val"> </input>
                    <td><textarea name="temperatura"> </textarea>
                    <td><textarea name="açoes_corretivas"> </textarea>

                </tr>
            </tbody>
        </table>
    </div>


    <button type="submit" class="btn btn-success" style="margin-top:20px; margin-bottom:20px;font-size:20px;font-weight:bold;">Submeter Registo</button>
</form>




@endsection