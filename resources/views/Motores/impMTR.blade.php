<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>PDF Motores</title>
</head>
<body>

<h1>Lista de Motores:</h1>

<div class="container-fluid">
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
            @foreach($mtr as $Motor)
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
</div>

</body>
</html>
