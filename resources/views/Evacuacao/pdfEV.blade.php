@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Evacuações Registradas:</h3>
        </div>
       
       <div>{{ $evacuacoespdf->links() }}</div>

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
                </tr>
            </thead>
            <tbody>
            @foreach($evacuacoespdf as $evacuacao)
                <tr>
                    <td>{{date('d/m/y', strtotime($evacuacao->data_evacuacao))}}</td>
                    <td>{{ $evacuacao->setorEvac->nome }}</td>
                    <td>{{ $evacuacao->userEvac->name }}</td>
                    <td>{{ $evacuacao->hora_inicio }}</td>
                    <td>{{ $evacuacao->hora_final }}</td>
                </tr>


    @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="pdfev" style=" width: 80px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Gerar PDF</a>
                                    
                                <a href="inicio" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Sair</a>
                                
                            </div>
</div>
@endsection