<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>PDF USUARIOS EXTERNOS</title>
</head>
<body>
<h1>Lista de Usuários Externos</h1>


    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Visitante</th>
                    <th>Anfitrião</th>
                    <th>Setor Visitado</th>
                    <th>Data Entrada</th>
                    <th>Data Saída</th>
                    <th>Pessoa Contato</th>
                    <th>Tel. Pessoa Contato</th>
                    <th>Fator RH</th>
                    <th>Contra Indicações Médicas</th>

                </tr>
            </thead>
            <tbody>
            @foreach($uv as $solicitarAcessoExterno)
                <tr>
                    <td>{{ $solicitarAcessoExterno->user->name }}</td>
                    <td>{{ $solicitarAcessoExterno->visit->name }}</td>
                    <td>{{ $solicitarAcessoExterno->setor1->nome }}</td>
                    <td>{{date('d/m/y', strtotime($solicitarAcessoExterno->data_entrada))}}</td>
                    <td>{{date('d/m/y', strtotime($solicitarAcessoExterno->data_saida))}}</td>
                    <td>{{ $solicitarAcessoExterno->pessoa_contato }}</td>
                    <td>{{ $solicitarAcessoExterno->tel_pessoa_contato }}</td>
                    <td>{{ $solicitarAcessoExterno->fator_rh }}</td>
                    <td>{{ $solicitarAcessoExterno->contra_indicacao }}</td>

                    
                </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>


    
</body>
</html>