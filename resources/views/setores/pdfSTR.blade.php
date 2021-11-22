@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Setores:</h3>
        </div>
       
       <div>{{ $setorespdf->links() }}</div>

    </div>
    <div class="row">
        <table class="table table-striped">
 
            <thead>
                <tr>
                    <th>Nome do Setor</th>
                    <th>Responsável do Setor</th>
                    <th>Descrição  do Setor</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($setorespdf as $setor)
                <tr>
                    <td>{{ $setor->nome }}</td>
                    <td>{{ $setor->userstr->name }}</td>
                    <td>{{ $setor->descricao }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="pdfstr" style=" width: 80px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Gerar PDF</a>
                                    
                                <a href="inicio" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Sair</a>
                                
                            </div>
</div>
@endsection