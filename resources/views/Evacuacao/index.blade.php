@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Registro de Evacuações</h3>
        </div>
        <div class="col-md-8">
            <a href="{{route('evacuacao.create')}}" class="btn btn-primary">Novo Registro</a>
        </div>
        <div>{{ $evacuacoes->links() }}</div>

    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data da Evacuação</th>
                    <th>Setor do Sinistro</th>
                    <th>Relator</th>
                    <th>Hora Inicial</th>
                    <th>Hora Final</th>
                    <th>Ações</th>

                </tr>
            </thead>
            <tbody>
            @foreach($evacuacoes as $evacuacao)
                <tr>
                    <td>{{date('d/m/y', strtotime($evacuacao->data_evacuacao))}}</td>
                    <td>{{ $evacuacao->setorEvac->nome }}</td>
                    <td>{{ $evacuacao->userEvac->name }}</td>
                    <td>{{ $evacuacao->hora_inicio }}</td>
                    <td>{{ $evacuacao->hora_final }}</td>
                    <td>
                        <ul class="list-inline">

                            <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="{{route('evacuacao.edit', ['evacuacao' => $evacuacao])}}" style=" width: 60px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Editar</a>
                                    
                                <a href="{{route('evacuacao.delete', ['evacuacao' => $evacuacao])}}" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
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