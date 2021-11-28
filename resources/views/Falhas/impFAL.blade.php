<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>PDF FALHAS</title>
</head>
<body>
    <h1>Lista de Falhas</h1>
<div class="row">
        <table class="table table-striped">
            <thead>
                <tr>               
                        <th>Origem</th>
                        <th>Elemento</th>
                        <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
            @foreach($fal as $falha)
              
                <tr>
                        <td>{{ $falha->origem }}</td>
                        <td>{{ $falha->elemento }}</td>
                        <td>{{ $falha->descricao }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>


