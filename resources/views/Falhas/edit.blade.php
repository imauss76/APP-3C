@extends('layouts.app')
 
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
    <br>
    
    <form action={{route('falha.update', ['falha' => $fal])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value="{{$fal->id}}">
        
        <div>
        <h3>Editar Falha:</h3> 
        </div>

        <table>

        <tr>
            <td><label for="origem"><strong>Origem:</strong></label></td>
            <td><select style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="origem" name="origem">
                <option value="{{ $fal->origem }}">{{ $fal->origem }}</option>
                <option value="Elétrica">Elétrica</option>
                <option value="Mecânica">Mecânica</option>
            </select></td>        
        </tr>

        <tr>
            <td><label for="elemento"><strong>Elemento:</strong></label>

            <td><select name="elemento" id="elemento" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option value="{{ $fal->elemento }}">{{ $fal->elementoFal->nome }}</option>

            <?php
                $conn = mysqli_connect('localhost','root','','app-3c')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, nome FROM elementos WHERE id >=1 order by nome");
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['nome']."</option>";
                }?>

            </select></td>
        </tr>
            
        <tr>
            <td><label for="descricao"><strong>Descrição:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="descricao" placeholder="Descreva a falha." name="descricao" value="{{$fal->descricao}}"></td>
        </tr>
        
        </table>
        <br>
            <div class="form-group">
                <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer; color: black; border: none; font-size: 14px;" type="submit" name="save_tec" value="Atualizar">
                <input style=" width:70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: black; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
            </div>
        </div>
    </form>
</div>
@endsection