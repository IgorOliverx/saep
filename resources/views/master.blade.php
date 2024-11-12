<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avaliação SAEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<header class="header">
    <div class="container cl" style="align-items: center">
        <h2>Gerenciamento de Tarefas</h2>
    </div>
    <div class="container cr" id="cr">
        <a href="{{route('users.create')}}">Cadastro de Usuários</a>
        <a href="{{route('tarefas.create')}}">Cadastro de Tarefas</a>
        <a href="{{route('tarefas.index')}}">Gerenciar Tarefas</a>
    </div>
</header>
<div class="container">
    @yield('content')
</div>
</body>
</html>
