@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Localização dos Usuários</h3>
        </div>
        <div class="col-md-8">
        <a href="{{route('localizacao.create')}}" class="btn btn-primary">Atualizar Localização</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Localização</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($localizacoes as $localizacao)
                <tr>
                    <td>{{ $localizacao->userloc->name }}</td>
                    <td>{{ $localizacao->pmloc->descricao }}</td>
                    <td>
                        <ul class="list-inline">

                            <div class="btn-group" role="group" aria-label="}Exemplo básico">
                                <a href="{{route('localizacao.edit', ['localizar' => $localizacao])}}" style=" width: 60px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Editar</a>
                                    
                                <a href="{{route('localizacao.delete', ['localizar' => $localizacao])}}" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
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