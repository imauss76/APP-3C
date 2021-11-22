@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Usuários Internos:</h3>
        </div>
        <div>{{ $AcessosInternospdf->links() }}</div>
  
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Setor</th>
                    <th>Nome</th>
                    <th>Matricula</th>
                    <th>Data Nasc.</th>
                    <th>Pessoa Contato</th>
                    <th>Tel. Pessoa Contato</th>
                    <th>Fator RH</th>
                    <th>Contra Indicações Médicas</th>
                </tr>
            </thead>
            <tbody>
            @foreach($AcessosInternospdf as $solicitarAcessoInterno)
              
                <tr>
                    <td>{{ $solicitarAcessoInterno->setor->nome }}</td>
                    <td>{{ $solicitarAcessoInterno->user->name }}</td>
                    <td>{{ $solicitarAcessoInterno->matricula }}</td>
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
    <br>
    <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="pdfui" style=" width: 80px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Gerar PDF</a>
                                    
                                <a href="inicio" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Sair</a>
                                
                            </div>
</div>
@endsection