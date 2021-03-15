<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lar - admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

@include('includes.navbar')

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

</html>
<style>
    body {
        background: url(images/fundo.jpg);
        background-size: cover;
    }
</style>