@extends('layouts.app')
@section('content')
<div class="container-fluid"><!-- container-fluid expande usa a tela toda -->
    <div class="row">
        <div class="col-md-4">
            <h3>Registro de Corretivas</h3>
        </div>
        <div class="col-md-8">
            <a href="{{route('corretiva.create')}}" class="btn btn-primary">Cadastrar Corretiva</a>
        </div>
        <div>{{ $corretivas->links() }}</div>

    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Setor</th>
                    <th>Motor</th>
                    <th>Falha</th>
                    <th>Causa da Falha</th>
                    <th>Descrição da Corretiva</th>
                    <th>Ação de Bloqueio</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($corretivas as $corretiva)
                <tr>
                    <td>{{date('d/m/y', strtotime($corretiva->data_corretiva))}}</td>
                    <td>{{ $corretiva->setorCor->nome }}</td>
                    <td>{{ $corretiva->motorCor->tag }}</td>
                    <td>{{ $corretiva->falhaCor->descricao }}</td>
                    <td>{{ $corretiva->descricao_causa }}</td>
                    <td>{{ $corretiva->descricao_corretiva }}</td>
                    <td>{{ $corretiva->acao_bloqueio }}</td>


                    <td>
                        <ul class="list-inline">

                            <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="{{route('corretiva.edit', ['corretiva' => $corretiva])}}" style=" width: 60px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Editar</a>
                                    
                                <a href="{{route('corretiva.delete', ['corretiva' => $corretiva])}}" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
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