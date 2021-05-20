@extends('layouts.vertical')
@section('titulo', 'Novo Produto')
@section('content')

<p>Os campos com * são obrigatórios.</p>

<div class="container" style="background-color:white;">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="row">Designação do Produto*</th>
                <th scope="col">Categoria*</th>
                <th scope="col">Quantidade*</th>
                <th scope="col">Reorder Point (stock minimo)*</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form action="{{url('/inicio/produtos/store_produto')}}" method="POST" style="font-weight:bold;">
                    @csrf
                    <th scope="row"> <input type="text" name="nome_produto"></th>
                    <td>
                        <select id="cargo" name="categoria">
                            <option value="Alimentação">Alimentação</option>
                            <option value="Higiene">Produtos de Higiene</option>
                            <option value="Equipamentos">Equipamentos</option>
                        </select>
                    </td>
                    <td> <input type="text" name="quantidade"></td>

                    <td> <input type="text" name="reorder_point"></td>
                   <td> <button type="submit" id="mybtn" class="btn btn-primary"><b>Criar Produto</b></button> </td>
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
</div>



@endsection