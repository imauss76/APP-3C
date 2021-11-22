@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Visitante:</h3>
        </div>
        <div>{{ $AcessosExternospdf->links() }}</div>

    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Visitante</th>
                    <th>Anfitrião</th>
                    <th>Setor</th>
                    <th>Pessoa Contato</th>
                    <th>Tel. Pessoa Contato</th>
                    <th>Fator RH</th>
                    <th>Contra Indicações Médicas</th>
                    <th>Data Nasc.</th>

                </tr>
            </thead>
            <tbody>
            @foreach($AcessosExternospdf as $solicitarAcessoExterno)
                <tr>
                    <td>{{ $solicitarAcessoExterno->user->name }}</td>
                    <td>{{ $solicitarAcessoExterno->visit->name }}</td>
                    <td>{{ $solicitarAcessoExterno->setor1->nome }}</td>
                    <td>{{ $solicitarAcessoExterno->pessoa_contato }}</td>
                    <td>{{ $solicitarAcessoExterno->tel_pessoa_contato }}</td>
                    <td>{{ $solicitarAcessoExterno->fator_rh }}</td>
                    <td>{{ $solicitarAcessoExterno->contra_indicacao }}</td>
                    <td>{{ date('d/m/y', strtotime($solicitarAcessoExterno->data_nasc))}}</td>

                </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>
    <br>
    <div class="btn-group" role="group" aria-label="Exemplo básico">
        <a href="pdfuv" style=" width: 80px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Gerar PDF</a>
                                    
        <a href="inicio" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Sair</a>
                                
    </div>

</div>
@endsection