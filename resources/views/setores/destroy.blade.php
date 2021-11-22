@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <form action={{route('setor.destroy', ['setor' => $str->id])}} method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <div>
    <h3>Deletar Setor:</h3>
    </div>    

    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <table>
        <tr>
                <td><label for="nome">Nome do Setor:</label></td>
                <td><input style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="nome" name="nome" value="{{$str->nome}}" disabled></td>
        </tr>
        <tr>
                <td><label for="usuario_responsavel">Responsável do Setor:</label></td>
                <td><input style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="usuario_responsavel" name="usuario_ responsavel" value="{{ $str->userstr->name }}" disabled></td>
        </tr> 
        <tr>
                <td><label for="descricao">Descrição do Setor:</label></td>
                <td><input style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="descricao" name="descricao" value="{{$str->descricao}}" disabled></td>
        </tr>
    </table>
    <br>
    <div class="alert alert-danger" style="width: 450px;" role="alert">A operação não poderá ser desfeita! Confirma a exclusão?</div>
    
    <div class="form-group">
      <input style=" width: 70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="delete_str" value="Deletar">
      <input style=" width: 70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
      </div>
  </div>
  </form>
</div>
@endsection