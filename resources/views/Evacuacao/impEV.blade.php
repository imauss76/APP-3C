<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>PDF Registros de Evacuações</title>
</head>
<body>
    <h1>Lista de Registros das Evacuações</h1>
    <div class="container-fluid">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data da Evacuação</th>
                    <th>Setor do Sinistro</th>
                    <th>Relator</th>
                    <th>Hora Inicial</th>
                    <th>Hora Final</th>
                    <th>Causa</th>
                    <th>descrição</th>
                    <th>Ponto +</th>
                    <th>Ponto -</th>
                </tr>
            </thead>
            <tbody>
            @foreach($ev as $evacuacao)
                <tr>
                    <td>{{ $evacuacao->data_evacuacao }}</td>
                    <td>{{ $evacuacao->setorEvac->nome }}</td>
                    <td>{{ $evacuacao->userEvac->name }}</td>
                    <td>{{ $evacuacao->hora_inicio }}</td>
                    <td>{{ $evacuacao->hora_final }}</td>
                    <td>{{ $evacuacao->causa_sinistro }}</td>
                    <td>{{ $evacuacao->descricao_evacuacao }}</td>
                    <td>{{ $evacuacao->pontos_positivos }}</td>
                    <td>{{ $evacuacao->pontos_negativos }}</td>
                </tr>

    @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
