@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Visitante:</h3>
        </div>
        <div class="col-md-8">
        <a href="{{route('solicitarAcessoExterno.create')}}" class="btn btn-primary">Solicitar Acesso</a>
        </div>
        <div>{{ $AcessosExternos->links() }}</div>

    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Visitante</th>
                    <th>Anfitrião</th>
                    <th>Setor</th>
                    <th>Data Entrada</th>
                    <th>Data Saída</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($AcessosExternos as $solicitarAcessoExterno)
                <tr>
                    <td>{{ $solicitarAcessoExterno->user->name }}</td>
                    <td>{{ $solicitarAcessoExterno->visit->name }}</td>
                    <td>{{ $solicitarAcessoExterno->setor1->nome }}</td>
                    <td>{{date('d/m/y', strtotime($solicitarAcessoExterno->data_entrada))}}</td>
                    <td>{{date('d/m/y', strtotime($solicitarAcessoExterno->data_saida))}}</td>
                    <td>
                        <ul class="list-inline">

                            <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="{{route('solicitarAcessoExterno.edit', ['solicitarAcessoExterno' => $solicitarAcessoExterno])}}" style=" width: 60px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Editar</a>
                                    
                                <a href="{{route('solicitarAcessoExterno.delete', ['solicitarAcessoExterno' => $solicitarAcessoExterno])}}" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Deletar</a>
                                
                            </div>
                            </ul>
                    </td>
                </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>
</div>
@endsection