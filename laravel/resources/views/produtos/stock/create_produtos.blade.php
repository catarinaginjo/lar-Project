@extends('layouts.vertical')
@section('titulo', 'Novo Produto')
@section('content')


<table class="table table-secondary ">
    <thead>
        <tr>
            <th scope="row">Designação do Produto*</th>
            <th scope="col">Categoria*</th>
            <th scope="col">Reorder Point (stock minimo)*</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <form action="{{url('/inicio/contactos/store_contacto')}}" method="POST" style="font-weight:bold;">
                @csrf
                <th scope="row"> <input type="text" name="nome_produto"></th>
                <td> <input type="text" name="categoria"></td>
                <td> <input type="text" name="reorder_point"></td>
                <button type="submit" id="mybtn" style="margin-bottom:10px" class="btn btn-primary">Criar Produto</button>
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