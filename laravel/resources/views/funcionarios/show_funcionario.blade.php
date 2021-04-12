<link href="{{ url('css/ementa.css') }}" rel="stylesheet">

@extends('layouts.vertical')
@section('titulo', 'Perfil de Funcionário')
@section('content')


<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-14 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('images/idosa0.jpg') }}" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3" style="color:black">
                                <h4>{{$user->nome}} {{$user->apelido}}</h4>
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
                                <h6 class="mb-0" style="color:black">Contacto:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$user->contacto}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h6 class="mb-0" style="color:black">Data de Nascimento</h6>
                            </div>
                            <div class="col-sm-13 text-secondary">
                                {{$user->data_nascimento}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Idade:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <p>{{ $user->idade }} anos</p>
                            </div>
                        </div>
                        <hr>
                        

                        <div class="row">
                            <div class="col-sm-3">
                                <form action="{{ url('/inicio/funcionarios/destroy/'.$user->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ url('inicio/funcionarios//edit/'. $user->id) }}">Editar Funcionário</a>
                                    <hr>
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Apagar Funcionário</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

