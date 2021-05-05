<link href="{{ url('css/ementa.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Ementa semanal')

@section('content')
<div class="msg">
    <!-- mensagens de alerta -->
    <?php if (isset($_GET['sucesso_criar_ementa'])) { ?>
        <div style="width: 25%;  height:40px;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
            <b>A ementa foi criada com sucesso!</b>
        </div>
    <?php } ?>
    <?php if (isset($_GET['sucesso_delete_ementa'])) { ?>
        <div style="width: 25%;  height:40px;  padding: 0.5rem;background-color:green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
            <b>A ementa foi eliminada com sucesso!</b>
        </div>
    <?php } ?>
</div>


<div class="container" id="data" style="text-align:center">

    DE <input type="date" name="semana_inicio">
    A <input type="date" name="semana_fim">

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
                    <p> {{$ementa->sopa_seg}} </p>
                <td>
                    <p> {{$ementa->almoço_seg }} </p>
                <td>
                    <p>{{$ementa-> sobremesaA_seg }}</p>
                <td>
                    <p>{{$ementa-> jantar_seg }}</p>
                <td>
                    <p>{{$ementa-> sobremesaJ_seg }}</p>

            </tr>
            <tr>

                <th scope="row">Terça-feira</th>
                <td>
                    <p>{{$ementa->sopa_ter }} </p>
                <td>
                    <p>{{$ementa-> almoço_ter }} </p>
                <td>
                    <p>{{$ementa-> sobremesaA_ter }} </p>
                <td>
                    <p>{{$ementa-> jantar_ter }} </p>
                <td>
                    <p>{{$ementa-> sobremesaJ_ter }} </p>

            </tr>
            <tr>

                <th scope="row">Quarta-feira</th>
                <td>
                    <p>{{$ementa-> sopa_qua }}</p>
                <td>
                    <p>{{$ementa->almoço_qua }} </p>
                <td>
                    <p>{{$ementa-> sobremesaA_qua }} </p>
                <td>
                    <p>{{$ementa->jantar_qua }} </p>
                <td>
                    <p>{{$ementa->sobremesaJ_qua }} </p>

            </tr>
            <tr>
                <th scope="row">Quinta-feira</th>
                <td>
                    <p>{{$ementa->sopa_qui }} </p>
                <td>
                    <p>{{$ementa-> almoço_qui }} </p>
                <td>
                    <p>{{$ementa-> sobremesaA_qu }} </p>
                <td>
                    <p>{{$ementa-> jantar_qu }} </p>
                <td>
                    <p>{{$ementa-> sobremesaJ_qui }} </p>

            </tr>
            <tr>

                <th scope="row">Sexta-feira</th>
                <td>
                    <p>{{$ementa-> sopa_sex }}</p>
                <td>
                    <p>{{$ementa-> almoço_sex }} </p>
                <td>
                    <p>{{$ementa-> sobremesaA_sex }}</p>
                <td>
                    <p>{{$ementa-> jantar_sex }} </p>
                <td>
                    <p>{{$ementa-> sobremesaJ_sex }} </p>
            </tr>
            <tr>

                <th scope="row">Sábado</th>
                <td>
                    <p>{{$ementa->sopa_sab }} </p>
                <td>
                    <p>{{$ementa-> almoço_sab }} </p>
                <td>
                    <p>{{$ementa-> sobremesaA_sa }}</p>
                <td>
                    <p>{{$ementa-> jantar_sab }} </p>
                <td>
                    <p>{{$ementa-> sobremesaJ_sab }}</p>

            </tr>
            <tr>

                <th scope="row">Domingo</th>
                <td>
                    <p>{{$ementa-> sopa_dom }}</p>
                <td>
                    <p>{{$ementa-> almoço_dom }} </p>
                <td>
                    <p>{{$ementa-> sobremesaA_dom }} </p>
                <td>
                    <p>{{$ementa->jantar_dom }}</p>
                <td>
                    <p>{{$ementa-> sobremesaJ_dom }}</p>

            </tr>
        </tbody>
    </table>

    <h2 style="font-size:20px">Informações adicionais à ementa:</h2>

    <div class="info">
        <textarea style="width:700px;height:200px;border-radius:0.5rem"></textarea>
    </div>

    <p style=" margin-top:20px; font-size:20px">Ementa criada por:</p>
    <div>
        <input type="text" name="nutricionista" style="width:400px;height:50px;border-radius:0.5rem">

    </div>
  
</div>

@endsection

<style>
    .button {
        color: white;
        font-family: 'Roboto', sans-serif;
    }
  
  th,
  td {
    border: 1px solid black;
  }

</style>