@extends('layouts.app')
@section('content')
<div class="container-fluid"><!-- container-fluid expande usa a tela toda -->
    <div class="row">
        <div class="col-md-4">
            <h3>Corretivas de maior custo:</h3>
        </div>
       
       <div>{{ $custopdf->links() }}</div>

    </div>

    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Relator</th>
                    <th>Setor</th>
                    <th>Custo</th>
                </tr>
            </thead>
            <tbody>
            @foreach($custopdf as $corretiva)
                <tr>
                <td>{{date('d/m/y', strtotime($corretiva->data_corretiva))}}</td>
                    <td>{{ $corretiva->userCor->name }}</td>
                    <td>{{ $corretiva->setorCor->nome }}</td>
                    <td>{{ $corretiva->custo }}</td>
                </tr>


    @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="#" style=" width: 80px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Gerar PDF</a>
                                    
                                <a href="inicio" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Sair</a>
                                
                            </div>
</div>
@endsection