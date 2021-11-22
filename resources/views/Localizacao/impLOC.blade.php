<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>PDF LOCALIZAÇÃO DOS USUÁRIOS</title>
</head>
<body>
    <h1>Localização dos Usuários</h1>
    <div class="container-fluid">
    <div class="row">
        <table class="table table-striped">
 
        <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Localização</th>
                </tr>
            </thead>
            <tbody>
            @foreach($loc as $localizacao)
                <tr>
                    <td>{{ $localizacao->userloc->name }}</td>
                    <td>{{ $localizacao->pmloc->descricao }}</td>
                </tr>
            @endforeach
            </tbody>


        </table>
    </div>
</div>
</body>
</html>