@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Técnicos:</h3>
        </div>
        <div class="col-md-8">
        <a href="{{route('Tecnico.create')}}" class="btn btn-primary">Cadastrar Técnico</a>
        </div>
        <div>{{ $tecnicos->links() }}</div>
  
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Função</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tecnicos as $tecnico)
              
                <tr>
                    <td>{{ $tecnico->matricula }}</td>
                    <td>{{ $tecnico->usertec->name }}</td>
                    <td>{{ $tecnico->funcao }}</td>
                    <td>
                        <ul class="list-inline">

                            <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="{{route('tecnicos.edit', ['tecnicos' => $tecnicos])}}" style=" width: 60px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Editar</a>
                                    
                                <a href="{{route('tecnicos.delete', ['tecnicos' => $tecnicos])}}" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
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