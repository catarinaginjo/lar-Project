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
        <div class="container" style="width:100; height:200px;padding-top:100px;">
            <h1> Bem-vinda (nome)</h1>
        </div>
    </body>
</html>
<style>
    body {
        margin:0;
        padding:0;
        background: url(images/fundo.jpg);
        background-size:cover;
    }
</style>