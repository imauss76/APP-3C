@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Falhas:</h3>
        </div>
        <div class="col-md-8">
        <a href="{{route('falha.create')}}" class="btn btn-primary">Cadastrar Falha</a>
        </div>
        <div>{{ $falhas->links() }}</div>
  
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Origem</th>
                    <th>Elemento</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($falhas as $falha)
              
                <tr>
                    <td>{{ $falha->origem }}</td>
                    <td>{{ $falha->elementoFal->nome }}</td>
                    <td>{{ $falha->descricao }}</td>
                    <td>
                        <ul class="list-inline">

                            <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="{{route('falha.edit', ['falha' => $falha])}}" style=" width: 60px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Editar</a>
                                    
                                <a href="{{route('falha.delete', ['falha' => $falha])}}" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
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