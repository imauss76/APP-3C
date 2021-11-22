@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3>Motores:</h3>
        </div>

        <div>{{ $dadospdf->links() }}</div>

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
                </tr>

            </thead>
            <tbody>
            @foreach($dadospdf as $Motor)
                <tr>

                    <td>{{ $Motor->tag }}</td>
                    <td>{{ $Motor->potencia }}</td>
                    <td>{{ $Motor->polos }}</td>
                    <td>{{ $Motor->carcaca }}</td>
                    <td>{{ $Motor->fabricante }}</td>
                    <td>{{ $Motor->setormtr->nome }}</td>
                    <td>                


        @endforeach
            </tbody>
           
        </table>
    </div>
    <br>
    <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="pdfmtr" style=" width: 80px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Gerar PDF</a>
                                    
                                <a href="inicio" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Sair</a>
                                
                            </div>
</div>
@endsection