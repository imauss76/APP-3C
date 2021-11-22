@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <form action={{route('rota.destroy', ['rota' => $rot->id])}} method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <div>
    <h3>Deletar Rota:</h3>
    </div>
    

    <div class="alert alert-danger" style="width: 500px;" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão da Rota?</div>
    
    <div class="form-group">
      <input style=" width: 70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="delete_rot" value="Deletar">
      <input style=" width: 70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
      </div>
  </div>
  </form>
</div>
@endsection