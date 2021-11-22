@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <form action={{route('evacuacao.destroy', ['evacuacao' => $eva->id])}} method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <div>
    <h3>Deletar Registro:</h3>
    </div>    

    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>

    <div>
        <label for="data_evacuacao"><strong>Data da Evacuação:</strong></label>
        <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="date" id="data_evacuacao" name="data_evacuacao" value="{{$eva->data_evacuacao}}" disabled>  
    </div>
    </div>

     <div>
        <label for="relator"><strong>Relator:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="relator" name="relator" value="{{$eva->relator}}" disabled>
    </div>

    <div>
        <label for="turno"><strong>Turno Ocorrido:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="turno" name="turno" value="{{$eva->turno}}" disabled>
    </div>

    <div>
        <label for="setor_sinistro"><strong>Setor do Sinistro:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="setor_sinistro" name="setor_sinistro" value="{{$eva->setor_sinistro}}" disabled>
    </div>

    <div>
        <label for="causa_sinistro"><strong>Causa do Sinistro:</strong></label><br>
        <input Style="width:510px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="causa_sinistro" id="causa_sinistro" value="{{$eva->causa_sinistro}}" disable>
    </div>
    <br>   

    <div>
        <label for="hora_inicio"><strong>Hora Inicial:</strong></label>
        <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="time" id="hora_inicio" name="hora_inicio" value="{{$eva->data_inicio}}" disable> 
    </div>

    <div>
        <label for="hora_final"><strong>Hora Final:</strong></label>
        <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="time" id="hora_final" name="hora_final" value="{{$eva->data_final}}" disable>  
    </div>

    <div>
        <label for="descricao_evacuacao"><strong>Descrição da Evacuação:</strong></label><br>
        <input Style="width:510px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="descricao_evacuacao" id="descricao_evacuacao" value="{{$eva->descricao_evacuacao}}" disable>
    </div>
    <div>
        <label for="pontos_positivos"><strong>Pontos Positivos:</strong></label><br>
        <input Style="width:510px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="pontos_positivos" id="pontos_positivos" value="{{$eva->pontos_positivos}}" disable>
    </div>
    <div>
        <label for="pontos_negativos"><strong>Pontos Negativos:</strong></label><br>
        <input Style="width:510px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="pontos_negativos" id="pontos_negativos" value="{{$eva->pontos_negativos}}" disable>
    </div>

    <div class="alert alert-danger" style="width: 510px;" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão do registro?</div>
    
    <div class="form-group">
      <input style=" width: 70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="delete_eva" value="Deletar"></input>
      <input style=" width: 70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar"></input>
      </div>
  </div>
  </form>
</div>
@endsection