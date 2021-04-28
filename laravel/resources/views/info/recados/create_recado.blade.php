@extends('layouts.vertical')

@section('titulo', 'Novo recado')
@section('content')

<table class="table table-secondary ">
    <thead>
        <tr>
            <th scope="row">Assunto*</th>
            <th scope="col">Descrição*</th>
            <th scope="col">Nome do Responsável*</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <form action="{{url('/inicio/contactos/store_recado')}}" method="POST" style="font-weight:bold;" enctype="multipart/form-data">
                @csrf
                <th scope="row"> <textarea name="assunto"></textarea>
                <td> <textarea type="text" name="descriçao"></textarea>
                <td> <input type="text" name="responsavel"></td>
                <button type="submit" id="mybtn" style="margin-bottom:10px" class="btn btn-primary"><b>Criar recado</b></button>
            </form>

            <!-- Gera mensagem de erro caso algum campo não esteja correto (relativamente as validações no controller)-->
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
        </tr>
    </tbody>
</table>

@endsection
