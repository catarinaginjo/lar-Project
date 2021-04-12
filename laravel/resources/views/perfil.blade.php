@extends('layouts.vertical')
@section('titulo', 'O meu Perfil')
@section('content')
<div class="container">
  <div class="main-body">
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="{{ asset('images/admin1.jpg') }}" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3"style="color:black">
                <h4>Ana Gomes</h4>
                <p class="text-secondary mb-1">Gestora de Stock</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">

        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0"style="color:black">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                AnaGomes@lar.pt
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <h6 class="mb-0"style="color:black">Data de Nascimento</h6>
              </div>
              <div class="col-sm-5 text-secondary">
                25/04/1974
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0"style="color:black">Contacto</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                93 222 111
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0"style="color:black">Morada</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Rua dos cantos, nº5
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0"style="color:black">Localidade</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Sendim
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0"style="color:black">Código Postal</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                5225-120
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <form action="{{ url('inicio/perfil/alterar-pass/') }}" method="POST"> <!-- .$user->id -->
                  @csrf
                  <a class="btn btn-success" href="{{ url('inicio/perfil/editar/') }}" style="margin-left:250px; width:200px;">Editar Perfil</a> <!-- .$user->id -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <a href="{{'/'}}" class="btn btn-danger" style="margin-left:250px; width:200px;">Alterar Password</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>

@endsection