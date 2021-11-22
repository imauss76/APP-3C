@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Rotas dos Usuários122:</h3>
        </div>

        <div>{{ $rotaspdf->links() }}</div>

    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Usuário123</th>
                    <th>Ponto Anterior1</th>
                    <th>Ponto Atual</th>
                    <th>Setor</th>
                </tr>
            </thead> 
            <tbody>
            @foreach($rotaspdf as $rota)
                <tr>
                    <td>{{ $rota->userRota->name }}</td>
                    <td>{{ $rota->paRota->descricao }}</td>
                    <td>{{ $rota->paaRota->descricao }}</td>
                    <td>{{ $rota->setor_ponto }}</td>
                </tr>
            @endforeach
            </tbody>
           
        </table>
    </div>
    <br>
    <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="pdfrot" style=" width: 80px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Gerar PDF</a>
                                    
                                <a href="inicio" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Sair</a>
                                
                            </div>
</div>
@endsection