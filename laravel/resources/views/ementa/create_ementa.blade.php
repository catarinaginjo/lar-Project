<link href="{{ url('css/ementa.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Criar ementa')

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


<form action="{{url('/inicio/ementa/store-ementa')}}" method="POST" style="font-weight:bold;">
    @csrf
    <div class="container" id="data" style="text-align:center">
        DE <input type="date" name="data_inicio">
        A <input type="date" name="data_fim">
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
                    <td><textarea name="seg_sopa"> </textarea>
                    <td><textarea name="seg_almoço"> </textarea>
                    <td><textarea name="seg_sob_almoço"> </textarea>
                    <td><textarea name="seg_jantar"> </textarea>
                    <td><textarea name="seg_sob_jantar"> </textarea>

                </tr>
                <tr>

                    <th scope="row">Terça-feira</th>
                    <td><textarea name="ter_sopa"> </textarea>
                    <td><textarea name="ter_almoço"> </textarea>
                    <td><textarea name="ter_sob_almoço"> </textarea>
                    <td><textarea name="ter_jantar"> </textarea>
                    <td><textarea name="ter_sob_jantar"> </textarea>

                </tr>
                <tr>

                    <th scope="row">Quarta-feira</th>
                    <td><textarea name="qua_sopa"> </textarea>
                    <td><textarea name="qua_almoço"> </textarea>
                    <td><textarea name="qua_sob_almoço"> </textarea>
                    <td><textarea name="qua_jantar"> </textarea>
                    <td><textarea name="qua_sob_jantar"> </textarea>

                </tr>
                <tr>
                    <th scope="row">Quinta-feira</th>
                    <td><textarea name="qui_sopa"> </textarea>
                    <td><textarea name="qui_almoço"> </textarea>
                    <td><textarea name="qui_sob_almoço"> </textarea>
                    <td><textarea name="qui_jantar"> </textarea>
                    <td><textarea name="qui_sob_jantar"> </textarea>

                </tr>
                <tr>

                    <th scope="row">Sexta-feira</th>
                    <td><textarea name="sex_sopa"> </textarea>
                    <td><textarea name="sex_almoço"> </textarea>
                    <td><textarea name="sex_sob_almoço"> </textarea>
                    <td><textarea name="sex_jantar"> </textarea>
                    <td><textarea name="sex_sob_jantar"> </textarea>

                </tr>
                <tr>

                    <th scope="row">Sábado</th>
                    <td><textarea name="sab_sopa"> </textarea>
                    <td><textarea name="sab_almoço"> </textarea>
                    <td><textarea name="sab_sob_almoço"> </textarea>
                    <td><textarea name="sab_jantar"> </textarea>
                    <td><textarea name="sab_sob_jantar"> </textarea>

                </tr>
                <tr>

                    <th scope="row">Domingo</th>
                    <td><textarea name="dom_sopa"> </textarea>
                    <td><textarea name="dom_almoço"> </textarea>
                    <td><textarea name="dom_sob_almoço"> </textarea>
                    <td><textarea name="dom_jantar"> </textarea>
                    <td><textarea name="dom_sob_jantar"> </textarea>

                </tr>
            </tbody>
        </table>

        <h2 style="font-size:20px">Informações adicionais à ementa:</h2>

        <div class="info">
            <textarea type="text" name="info" style="width:700px;height:200px;border-radius:0.5rem"></textarea>
        </div>

        <p style="margin-top:20px;font-size:20px">Ementa criada por:</p>
        <div>
            <input type="text" name="nutricionista" style="width:400px;height:50px;border-radius:0.5rem">
        </div>

        <button type="submit" class="btn btn-success" style="margin-top:40px;font-size:20px;font-weight:bold;float:right;">Submeter ementa semanal</button>

    </div>
</form>


@endsection

<style>
  th,
  td {
    border: 1px solid black;
  }
</style>