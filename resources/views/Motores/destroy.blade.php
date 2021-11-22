@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row-fluid">
    <form action={{route('Motor.destroy', ['Motor' => $mtr->id])}} method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <div>
    <h3>Deletar Motor "{{$mtr->id}}":</h3>
    </div>

    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>

    <table>
    <tr>
            <td><label for="tag"><strong>Tag do Motor:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="tag" name="tag" value="{{ $mtr->tag }}" disabled></td>
        </tr>

        <tr>
            <td><label for="potencia"><strong>Potência - CV:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="potencia" name="potencia" value="{{$mtr->potencia}}" disabled></td>
        </tr>

        <tr>
            <td><label for="polos"><strong>Núm. Pólos:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="polos" name="polos" value="{{$mtr->polos}}" disabled></td>
        </tr>

        <tr>
            <td><label for="carcaca"><strong>Tamanho da Carcaça:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="carcaca" name="carcaca" value="{{$mtr->carcaca}}" disabled></td>
        </tr>

        <tr>
            <td><label for="fabricante"><strong>Fabricante:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="fabricante" name="fabricante" value="{{$mtr->fabricante}}" disabled></td>
        </tr>

        <tr>
            <td><label for="setor"><strong>Setor em utilização:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 4px; padding: 6px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="setor" name="setor" value="{{$mtr->setormtr->nome}}" disabled></td>
        </tr>

    </table>
    <br>

    <div class="alert alert-danger" style="width: 430px;" role="alert">A operação não poderá ser desfeita! Confirma a exclusão?</div>

          <div class="form-group">
        <input style=" width: 70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="delete_mtr" value="Deletar">
        <input style=" width: 70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
      </div>
    </div>
  </form>
</div>
@endsection
