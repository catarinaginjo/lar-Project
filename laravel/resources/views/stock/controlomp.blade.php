<link href="{{ url('css/controlomp.css') }}" rel="stylesheet">
@extends('layouts.backend')
@section('content')

<h1>CONTROLO DA RECEÇÃO DAS MATÉRIAS-PRIMAS </h1>



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