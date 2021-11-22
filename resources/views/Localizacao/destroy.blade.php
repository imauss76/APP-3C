@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <form action={{route('localizacao.destroy', ['localizacao' => $loc->id])}} method="post">

    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <div>
    <h3>Deletar Localização:</h3>
    </div>

    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>

    <div>
    <label for="usuario"><strong>Usuário:</strong></label>
    
    <input name="usuario" id="usuario" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" value="{{$loc->usuario}}" disabled>
    </div>

    <div>
        <label for="ponto_localizado"><strong>Localização:</strong></label>

        <input name="ponto_localizado" id="ponto_localizado" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" value="{{$loc->ponto_localizado}}" disabled>
    </div>

    <div class="alert alert-danger" style="width: 530px" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão da localização?</div>

    <div class="form-group">
      <input style=" width: 70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="delete_loc" value="Deletar">
      <input  style=" width: 70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
      </div>
  </div>
  </form>
</div>
@endsection