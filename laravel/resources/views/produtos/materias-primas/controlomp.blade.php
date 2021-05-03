<link href="{{ url('css/controlomp.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Controlo de receção de matérias-primas')
@section('content')

<a class="btn btn-success" style="margin-bottom:10px;" href="/inicio/controlo_materias_primas/create"><b>+ NOVA RECEÇÃO DE PRODUTO </b></a>
            
<table class="table table-hover table-striped table-secondary" style="width:800px; height:400px;">
  <thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Nºfatura - Guia de remessa</th>
      <th scope="col">Lote</th>
      <th scope="col">Designação</th>
      <th scope="col">Higiente transporte</th>
      <th scope="col">Peso</th>
      <th scope="col">Aspeto embalagem e/ou produto</th>
      <th scope="col">Data validade</th>
      <th scope="col">ºC</th>
      <th scope="col">Ações corretivas</th>
      <th scope="col">Responsável</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input type="date"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

@endsection