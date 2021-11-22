<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>PDF USUARIOS INTERNOS</title>
</head>
<body>
    <h1>Lista de Usuários Internos</h1>
<div class="row">
        <table class="table table-striped">
            <thead>
                <tr>               
                        <th>Setor</th>
                        <th>Nome</th>
                        <th>Data Nasc.</th>
                        <th>Pessoa Contato</th>
                        <th>Tel. Pessoa Contato</th>
                        <th>Fator RH</th>
                        <th>Contra Indicações Médicas</th>
                </tr>
            </thead>
            <tbody>
            @foreach($ui as $solicitarAcessoInterno)
              
                <tr>
                        <td>{{ $solicitarAcessoInterno->setor->nome }}</td>
                        <td>{{ $solicitarAcessoInterno->user->name }}</td>
                        <td>{{ date('d/m/y', strtotime($solicitarAcessoInterno->data_nasc))}}</td>
                        <td>{{ $solicitarAcessoInterno->pessoa_contato }}</td>
                        <td>{{ $solicitarAcessoInterno->tel_pessoa_contato }}</td>
                        <td>{{ $solicitarAcessoInterno->fator_rh }}</td>
                        <td>{{ $solicitarAcessoInterno->contra_indicacao }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>


