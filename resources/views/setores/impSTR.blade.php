<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>PDF SETORES</title>
</head>
<body>
    <h1>Lista de Setores</h1>
    <div class="container-fluid">
    <div class="row">
        <table class="table table-striped">
 
            <thead>
                <tr>
                    <th>Nome do Setor</th>
                    <th>Responsável do Setor</th>
                    <th>Descrição  do Setor</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($set as $setor)
                <tr>
                    <td>{{ $setor->nome }}</td>
                    <td>{{ $setor->userstr->name }}</td>
                    <td>{{ $setor->descricao }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
