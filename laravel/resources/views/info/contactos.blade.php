@extends('layouts.backend')
@section('content')

<div class="container" style="background-color:white;">

    <!-- CONTACTOS SOS-->
    <h1 style="font-size:20px;margin-bottom:20px">CONTACTOS URGENTES - BOMBEIROS, HOSPITAIS</h1>

    <a class="btn btn-warning" style="float:right; margin-bottom:20px">Adicionar contacto</a>
    <table class="table table-striped table-hover" name="SOS" style="margin-bottom:50px;">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Contacto</th>
                <th scope="col">Alterações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bombeiros Sendim</td>
                <td>273 739 121</td>
                <td scope="row">
                    <form action="" method="POST">
                        <a class="btn btn-success">Editar</a>
                        @csrf
                        <button type="submit" class="btn btn-danger">Apagar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- GESTORES -->
    <h1 style="font-size:20px;margin-bottom:20px">GESTORES</h1>

    <table class="table table-striped table-hover" name="gestores" style="margin-bottom:50px;">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Contacto</th>
                <th scope="col">Alterações</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Etelvina Martins</td>
                <td>931 222 111</td>
                <td scope="row">
                    <form action="" method="POST">
                        <a class="btn btn-success">Editar</a>
                        @csrf
                        <button type="submit" class="btn btn-danger">Apagar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- FUNCIONÁRIOS -->
    <h1 style="font-size:20px;margin-bottom:20px">FUNCIONÁRIOS</h1>

    <table class="table table-striped table-hover" name="funcionarios" style="margin-bottom:50px;">

        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
                <th scope="col">Contacto</th>
                <th scope="col">Alterações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Maria Vale</td>
                <td>Auxiliar</td>
                <td>92 222 111</td>
                <td scope="row">
                    <form action="" method="POST">
                        <a class="btn btn-success">Editar</a>
                        @csrf
                        <button type="submit" class="btn btn-danger">Apagar</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>Helena Martins</td>
                <td>Cozinheira</td>
                <td>92 222 111</td>
                <td scope="row">
                    <form action="" method="POST">
                        <a class="btn btn-success">Editar</a>
                        @csrf
                        <button type="submit" class="btn btn-danger">Apagar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- OUTROS -->
    <h1 style="font-size:20px;margin-bottom:20px">OUTROS</h1>

    <table class="table table-striped table-hover" name="outros" style="margin-bottom:50px;">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
                <th scope="col">Contacto</th>
                <th scope="col">Alterações</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Joana Martins</td>
                <td>Funcionária de Limpeza</td>
                <td>931 222 111</td>
                <td scope="row">
                    <form action="" method="POST">
                        <a class="btn btn-success">Editar</a>
                        @csrf
                        <button type="submit" class="btn btn-danger">Apagar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

<style>
    .button {
        color: white;
        font-family: 'Roboto', sans-serif;
    }
</style>