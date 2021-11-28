<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>PDF Registros de Corretivas</title>
</head>
<body>
    <h1>Lista de Registros das Evacuações</h1>
    <div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora Inicio</th>
                    <th>Hora Final</th>
                    <th>Relator</th>
                    <th>Setor</th>
                    <th>Motor</th>
                    <th>Elemento</th>
                    <th>Falha</th>
                    <th>Descrição da Falha</th>
                    <th>Descrição da Corretiva</th>
                    <th>Ação de Bloqueio</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cor as $corretiva)
                <tr>
                    <td>{{date('d/m/y', strtotime($corretiva->data_corretiva))}}</td>
                    <td>{{ $corretiva->hora_inicio }}</td>
                    <td>{{ $corretiva->hora_final }}</td>
                    <td>{{ $corretiva->userCor->name }}</td>
                    <td>{{ $corretiva->setorCor->nome }}</td>
                    <td>{{ $corretiva->motorCor->tag }}</td>
                    <td>{{ $corretiva->elementoCor->nome }}</td>
                    <td>{{ $corretiva->falhaCor->descricao }}</td>
                    <td>{{ $corretiva->descricao_causa }}</td>
                    <td>{{ $corretiva->descricao_corretiva }}</td>
                    <td>{{ $corretiva->acao_bloqueio }}</td>
                </tr>

    @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
