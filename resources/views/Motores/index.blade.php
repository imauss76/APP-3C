@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Motores:</h3>
        </div>
        <div class="col-md-8">
        <a href="{{route('Motor.create')}}" class="btn btn-primary">Incluir Novo Motor</a>
        </div>

        <div>{{ $dados->links() }}</div>

    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tag</th>
                    <th>Potência</th>
                    <th>Número de Pólos</th>
                    <th>Tamanho Carcaça</th>
                    <th>Fabricante</th>
                    <th>Setor</th>
                    <th>Ações</th>
                </tr>

            </thead>
            <tbody>
            @foreach($dados as $Motor)
                <tr>

                    <td>{{ $Motor->tag }}</td>
                    <td>{{ $Motor->potencia }}</td>
                    <td>{{ $Motor->polos }}</td>
                    <td>{{ $Motor->carcaca }}</td>
                    <td>{{ $Motor->fabricante }}</td>
                    <td>{{ $Motor->setormtr->nome }}</td>
                    <td>
                        <ul class="list-inline">
                            <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="{{route('Motor.edit', ['Motor' => $Motor])}}" style=" width: 60px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Editar</a>
                                    
                                <a href="{{route('Motor.delete', ['Motor' => $Motor])}}" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
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