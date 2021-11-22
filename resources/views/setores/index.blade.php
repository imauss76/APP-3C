@extends('layouts.app')
@section('content')
<div class="container-fluid"><!-- container-fluid expande usa a tela toda -->
    <div class="row">
        <div class="col-md-4">
            <h3>Setores:</h3>
        </div>
        <div class="col-md-8">
            <a href="{{route('setor.create')}}" class="btn btn-primary">Incluir Novo Setor</a>
        </div>
       
       <div>{{ $setores->links() }}</div>

    </div>
    <div class="row">
        <table class="table table-striped">
 
            <thead>
                <tr>
                    <th>Nome do Setor</th>
                    <th>Responsável do Setor</th>
                    <th>Descrição  do Setor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($setores as $setor)
                <tr>
                    <td>{{ $setor->nome }}</td>
                    <td>{{ $setor->userstr->name }}</td>
                    <td>{{ $setor->descricao }}</td>
                    <td>
                        <ul class="list-inline">

                            <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="{{route('setor.edit', ['setor' => $setor])}}" style=" width: 60px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Editar</a>
                                    
                                <a href="{{route('setor.delete', ['setor' => $setor])}}" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
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