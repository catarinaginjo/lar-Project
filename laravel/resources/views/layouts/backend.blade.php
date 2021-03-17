<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title', 'Lar - administrador')</title>
</head>
@include('includes.navbar')

<body>
    <main class="container" style="margin-top:80px;">
        @yield('content')
    </main>

</body>

</html>

<style>
    body {
        margin: 0;
        padding: 0;
        background: url(images/fundo.jpg);
        background-size: cover;
    }
</style>