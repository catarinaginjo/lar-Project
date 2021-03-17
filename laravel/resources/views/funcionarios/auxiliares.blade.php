@extends('layouts.backend')
@section('content')

<body class="janela">
    <div class="container" style="width:100; height:200px;padding-top:40px;">
        <h1> Utentes</h1>
        <div class="utentes">
            <div class="row">
                <div class="column"style=" margin-left:20px">
                    <img src="{{ asset('images/idosa0.jpg') }}" alt="utente" class="rounded-circle" style="width:150px; height:150px">
                    <p>Maria Rodrigues</p>
                </div>
                <div class="column" style=" margin-left:20px">
                    <img src="{{ asset('images/idoso5.jpg') }}" alt="utente" class="rounded-circle" style="width:150px; height:150px;">
                    <p>Roberto Gomes</p>
                </div>
            </div>
        </div>
</body>

@endsection
