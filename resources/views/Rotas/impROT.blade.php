<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>PDF ROTAS DOS USUÁRIOS</title>
</head>
<body>

<h1>Rotas dos Usuário:</h1>

<div class="container-fluid">
    <div class="row">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Ponto Anterior</th>
                    <th>Ponto Atual</th>
                    <th>Setor</th>
                </tr>
            </thead>
            <tbody>
            @foreach($rot as $rota)
                <tr>
                    <td>{{ $rota->usuario }}</td>
                    <td>{{ $rota->paRota->descricao }}</td>
                    <td>{{ $rota->paaRota->descricao }}</td>
                    <td>{{ $rota->setor_ponto }}</td>
                </tr>
            @endforeach
            </tbody>
           
        </table>
    </div>
</div>

</body>
</html>
