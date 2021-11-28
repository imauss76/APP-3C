@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Falhas:</h3>
        </div>
        <div>{{ $falhaspdf->links() }}</div>
  
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Origem</th>
                    <th>Elemento</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
            @foreach($falhaspdf as $falha)
              
                <tr>
                    <td>{{ $falha->origem }}</td>
                    <td>{{ $falha->elemento }}</td>
                    <td>{{ $falha->descricao }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="pdffal" style=" width: 80px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Gerar PDF</a>
                                    
                                <a href="inicio" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Sair</a>
                                
                            </div>
</div>
@endsection