<link href="{{ url('css/ementa.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Criar ementa')

@section('content')
<div class="btn">
    <a class="btn btn-primary" style="margin-bottom:10px;" href="/inicio/create-ementa"><b>Criar Ementa </b></a>
</div>
<div class="imgbox">
    <a href="{{url('/')}}">
        <img src="{{ asset('images/previous.png') }}" alt="previous" style="width:50px; height:50px;margin-left:-50px;">
    </a>
</div>
<div class="imgbox">
    <a href="{{url('/')}}">
        <img src="{{ asset('images/next.png') }}" alt="previous" style="width:50px;">
    </a>
</div>

<div class="container1">
    <form>
        DE <input type="date" name="semana_inicio">
        A <input type="date" name="semana_fim">
</div>

</form>
<div class="container" style="margin-bottom: 150px">
    <table class="table table-secondary table-hover">
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
                <form action="">
                    <th scope="row">Segunda-feira</th>
                    <td><textarea name="sopa_seg"> </textarea>
                    <td><textarea name="almoço_seg"> </textarea>
                    <td><textarea name="sobremesaA_seg"> </textarea>
                    <td><textarea name="jantar_seg"> </textarea>
                    <td><textarea name="sobremesaJ_seg"> </textarea>
                </form>
            </tr>
            <tr>
                <form action="">
                    <th scope="row">Terça-feira</th>
                    <td><textarea name="sopa_ter"> </textarea>
                    <td><textarea name="almoço_ter"> </textarea>
                    <td><textarea name="sobremesaA_ter"> </textarea>
                    <td><textarea name="jantar_ter"> </textarea>
                    <td><textarea name="sobremesaJ_ter"> </textarea>
                </form>
            </tr>
            <tr>
                <form action="">
                    <th scope="row">Quarta-feira</th>
                    <td><textarea name="sopa_qua"> </textarea>
                    <td><textarea name="almoço_qua"> </textarea>
                    <td><textarea name="sobremesaA_qua"> </textarea>
                    <td><textarea name="jantar_qua"> </textarea>
                    <td><textarea name="sobremesaJ_qua"> </textarea>
                </form>
            </tr>
            <tr>
                <form action="">
                    <th scope="row">Quinta-feira</th>
                    <td><textarea name="sopa_qui"> </textarea>
                    <td><textarea name="almoço_qui"> </textarea>
                    <td><textarea name="sobremesaA_qui"> </textarea>
                    <td><textarea name="jantar_qui"> </textarea>
                    <td><textarea name="sobremesaJ_qui"> </textarea>
                </form>
            </tr>
            <tr>
                <form action="">
                    <th scope="row">Sexta-feira</th>
                    <td><textarea name="sopa_sex"> </textarea>
                    <td><textarea name="almoço_sex"> </textarea>
                    <td><textarea name="sobremesaA_sex"> </textarea>
                    <td><textarea name="jantar_sex"> </textarea>
                    <td><textarea name="sobremesaJ_sex"> </textarea>
                </form>
            </tr>
            <tr>
                <form action="">
                    <th scope="row">Sábado</th>
                    <td><textarea name="sopa_sab"> </textarea>
                    <td><textarea name="almoço_sab"> </textarea>
                    <td><textarea name="sobremesaA_sab"> </textarea>
                    <td><textarea name="jantar_sab"> </textarea>
                    <td><textarea name="sobremesaJ_sab"> </textarea>
                </form>
            </tr>
            <tr>
                <form action="">
                    <th scope="row">Domingo</th>
                    <td><textarea name="sopa_dom"> </textarea>
                    <td><textarea name="almoço_dom"> </textarea>
                    <td><textarea name="sobremesaA_dom"> </textarea>
                    <td><textarea name="jantar_dom"> </textarea>
                    <td><textarea name="sobremesaJ_dom"> </textarea>
                </form>
            </tr>
        </tbody>
    </table>

    <h2>Informações adicionais à ementa:</h2>

    <div class="info">
        <textarea style="width:700px;height:200px"></textarea>
    </div>

    <p style="margin-top:20px;">Ementa criada por:</p>
    <div>
        <form action="">
            <input type="text" name="nutricionista" style="width:400px;height:50px;">
        </form>
    </div>

    <button type="submit" class="btn btn-success" style="margin-top:40px;font-size:20px;font-weight:bold;float:right;">Submeter ementa semanal</button>

</div>

@endsection