<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>PDF ELEMENTOS DE MOTORES</title>
</head>
<body>
    <h1>Lista de Elementos</h1>
    <div class="container-fluid">
    <div class="row">
        <table class="table table-striped">
 
            <thead>
                <tr>
                    <th>Nome do Elemento</th>
                    <th>Valor do Elemento - R$</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($ele as $elemento)
                <tr>
                    <td>{{ $elemento->nome }}</td>
                    <td>{{ $elemento->valor }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
