<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>PDF TECNICOS</title>
</head>
<body>
    <h1>Lista de Técnicos</h1>
    <div class="container-fluid">
    <div class="row">
        <table class="table table-striped">
 
            <thead>
                <tr>
                    <th>Matricula do Técnico</th>
                    <th>Nome do Técnico</th>
                    <th>Função do Técnico</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($tec as $tecnico)
                <tr>
                    <td>{{ $tecnico->matricula }}</td>
                    <td>{{ $tecnico->usertec->name }}</td>
                    <td>{{ $tecnico->funcao }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
