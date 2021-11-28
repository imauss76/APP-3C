@extends('layouts.app')
@section('content')
<div class="container-fluid"><!-- container-fluid expande usa a tela toda -->
    <div class="row">
        <div class="col-md-4">
            <h3>Corretivas Registradas:</h3>
        </div>
       
       <div>{{ $corretivaspdf->links() }}</div>

    </div>

    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora Inicio</th>
                    <th>Hora Final</th>
                    <th>Relator</th>
                    <th>Setor</th>
                    <th>Motor</th>
                    <th>Elemento</th>
                    <th>Falha</th>
                    <th>Descrição da Falha</th>
                    <th>Descrição da Corretiva</th>
                    <th>Ação de Bloqueio</th>
                </tr>
            </thead>
            <tbody>
            @foreach($corretivaspdf as $corretiva)
                <tr>
                <td>{{date('d/m/y', strtotime($corretiva->data_corretiva))}}</td>
                <td>{{ $corretiva->hora_inicio }}</td>
                    <td>{{ $corretiva->hora_final }}</td>
                    <td>{{ $corretiva->userCor->name }}</td>
                    <td>{{ $corretiva->setorCor->nome }}</td>
                    <td>{{ $corretiva->motorCor->tag }}</td>
                    <td>{{ $corretiva->elementoCor->nome }}</td>
                    <td>{{ $corretiva->falhaCor->descricao }}</td>
                    <td>{{ $corretiva->descricao_causa }}</td>
                    <td>{{ $corretiva->descricao_corretiva }}</td>
                    <td>{{ $corretiva->acao_bloqueio }}</td>
                </tr>


    @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="pdfcor" style=" width: 80px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Gerar PDF</a>
                                    
                                <a href="inicio" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Sair</a>
                                
                            </div>
</div>
@endsection