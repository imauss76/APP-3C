@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <form action={{route('falha.destroy', ['falha' => $fal->id])}} method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <div>
    <h3>Deletar Falha:</h3>
    </div>

    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>

    <table>

        <tr>
            <td><label for="origem"><strong>Origem:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="origem" name="origem" value="{{ $fal->origem }}" disabled></td>
        </tr>

        <tr>
            <td><label for="elemento"><strong>Elemento:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="elemento" name="elemento" value="{{ $fal->elemento }}" disabled></td>
        </tr>

        <tr>
            <td><label for="descricao"><strong>Descrição:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="descricao" placeholder="Descreva a falha." name="descricao" value="{{$fal->descricao}}" disabled></td>
        </tr>
        
        </table>
        <br>
    
            <br>
            <div class="alert alert-danger" style="width: 450px;" role="alert">A operação não poderá ser desfeita! Confirma a exclusão?</div>
            
            <div class="form-group">
            <input style=" width: 70px; background: #069cc2; border-radius: 6px; padding: 4px;
                    cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="delete_fal" value="Deletar">
            <input style=" width: 70px; background: red; border-radius: 6px; padding: 4px;
                    cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
            </div>
  </div>
  </form>
</div>
@endsection