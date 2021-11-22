@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <form action={{route('Tecnico.destroy', ['Tecnico' => $tec->id])}} method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <div>
    <h3>Deletar Técnico:</h3>
    </div>

    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <table>
        <tr>
            <td><label for="matricula"><strong>Matricula:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="matricula" name="matricula" value="{{$tec->matricula}}" disabled></td>
        </tr>

        <tr>
            <td><label for="nome"><strong>Nome:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="nome" name="nome" value="{{ $tec->usertec->name }}" disabled></td>
        </tr>

        <tr>
            <td><label for="funcao"><strong>Função:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="funcao" name="funcao" value="{{ $tec->funcao }}" disabled></td>
        </tr>
  </form>
</div>
@endsection