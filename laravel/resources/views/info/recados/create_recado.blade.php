@extends('layouts.vertical')

@section('titulo', 'Novo recado')
@section('content')

<p>Os campos com * são obrigatórios.</p>

<div class="container" style="background-color:white;">
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="row">Assunto*</th>
            <th scope="col">Descrição do recado*</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <form action="{{url('/inicio/recados/store_recado')}}" method="POST" style="font-weight:bold;">
                @csrf
                <th scope="row"> <textarea style="width:359px; height:50px" name="assunto"></textarea>
                <td> <textarea type="text" style="width:400px; height:200px" name="descriçao"></textarea>
                <td><button type="submit" id="mybtn"  class="btn btn-primary"><b>Criar recado</b></button><td>
            </form>


            <!-- Gera mensagem de erro caso algum campo não esteja correto (relativamente as validações no controller)-->
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>UPS! </strong>Erro com os dados que forneceu.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </tr>
    </tbody>
</table>
</div>
@endsection