<link href="{{ url('css/controlomp.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Controlo de receção de matérias-primas')
@section('content')

<div class="msg">
  <!-- mensagens de alerta -->
  <?php if (isset($_GET['sucesso_delete_dados'])) { ?>
    <div style="width: 25%;  height:40px;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px ;border-radius:0.5rem">
      <b>Os dados foram apagados com sucesso!</b>
    </div>
  <?php } ?>
  <?php if (isset($_GET['sucesso_criar_dados'])) { ?>
    <div style="width: 30%;  height:40px;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
      <b>Os dados foram criados com sucesso!</b>
    </div>
  <?php } ?>
</div>

<a class="btn btn-success" style="margin-bottom:20px;" href="/inicio/controlo_materias_primas/create"><b>+ NOVO REGISTO </b></a>


<div class="input-group" style="margin-bottom:10px">
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Ex.: Laranjas" aria-label="Search">
    <button class="btn btn-primary my-2 my-sm-0" type="submit"><b>Pesquisar</b></button>
  </form>
</div>

<div>
  <p> C - conforme </p>
  <p> NC - não conforme </p>
  <p> D - devolvido </p>
</div>

<div class="tabela" style="background-color:white;">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Data</th>
        <th scope="col">Fornecedor</th>
        <th scope="col">Nºfatura</th>
        <th scope="col">Lote</th>
        <th scope="col">Designação</th>
        <th scope="col">Higiente transporte</th>
        <th scope="col">Peso (kg)</th>
        <th scope="col">Aspeto embalagem e/ou produto</th>
        <th scope="col">Data validade</th>
        <th scope="col">ºC</th>
        <th scope="col">Ações corretivas</th>
        <th scope="col">Responsável</th>
        <th scope="col"> - </th>
      </tr>
    </thead>
    <tbody>
      @foreach($controlos as $controlo)
      <tr>
        <th scope="row">
          <p>{{$controlo->data_receçao}}</p>
        </th>
        <td>
          <p>{{$controlo->fornecedor}}</p>
        </td>
        <td>
          <p>{{$controlo->num_fatura}}</p>
        </td>
        <td>
          <p>{{$controlo->lote}}</p>
        </td>
        <td>
          <p>{{$controlo->nome_produto}}</p>
        </td>
        <td>
          <p>{{$controlo->higiene}}</p>
        </td>
        <td>
          <p>{{$controlo->peso}}kg</p>
        </td>
        <td>
          <p>{{$controlo->aspeto}}</p>
        </td>
        <td>
          <p>{{$controlo->data_val}}</p>
        </td>
        <td>
          <p>{{$controlo->temperatura}}</p>
        </td>
        <td>
          <p>{{$controlo->açoes_corretivas}}</p>
        </td>
        <td>
          <p>{{$controlo->getResponsavel()->nome}} {{$controlo->getResponsavel()->apelido}}</p>
        </td>
        <td>
          <form action="{{ url('/inicio/controlo_materias_primas/destroy/'. $controlo->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger"><b>Apagar</b></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

{!! $controlos->links('pagination::bootstrap-4') !!}

@endsection

<style>
  th,
  td {
    border: 1px solid black;
  }
</style>