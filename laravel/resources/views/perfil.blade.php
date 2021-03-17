@extends('layouts.backend')
@section('content')

<h1 style="font-weight:bold; margin-bottom:30px; margin-left:350px"> PERFIL DE UTILIZADOR </h1>
<div class="container">
  <div class="main-body">
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="{{ asset('images/admin1.jpg') }}" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
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
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                AnaGomes@lar.pt
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <h6 class="mb-0">Data de Nascimento</h6>
              </div>
              <div class="col-sm-13 text-secondary">
                25/04/1974
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Contacto</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                93 222 111
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Morada</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Rua dos cantos, nº5
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Localidade</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Sendim
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Código Postal</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                5225-120
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <button type="submit" class="btn btn-success" style="margin-left:250px; width:200px;">Editar perfil</button>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <button type="submit" class="btn btn-danger" style="margin-left:250px; width:200px;">Alterar Password</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
</div>

@endsection

