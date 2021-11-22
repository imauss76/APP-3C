@extends('layouts.app')
 
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
    
    <br>
    <form action={{route('setor.update', ['setor' => $str])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <table>
           
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$str->id}}>
        
        <div>
        <h3>Editar Setor:</h3>
        </div>

        <tr>
            <td><label for="nome">Nome do Setor:</label></td>
            <td><input style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="nome" name="nome" value="{{$str->nome}}"></td>
        </tr>
        <tr>
            <td><label for="usuario_responsavel">Responsável do Setor:</label></td>
    
            <td><select name="usuario_responsavel" id="usuario_responsavel" style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option value="{{ $str->usuario_responsavel }}">{{ $str->userstr->name }}</option>

            <?php
                    $conn = mysqli_connect('localhost','root','','app-3c')or die(mysqli_error());
                    mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                    $sql = mysqli_query($conn,"SELECT id, name FROM users WHERE id >= 1 order by name");
                    while($row = mysqli_fetch_assoc($sql)){
                        echo "<option value=".$row['id'].">".$row['name']."</option>";
                        
            }?>
            </select></td>
        </tr>

        <tr>
            
            <td><label for="descricao">Descrição do Setor:</label></td>
            <td><input style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="descricao" name="descricao" value="{{$str->descricao}}"></td>
        </tr>

        </table>
        <br>
            <div class="form-group">
                <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer; color: black; border: none; font-size: 14px;" type="submit" name="save_str" value="Atualizar">
                <input style=" width:70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: black; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
            </div>
        </div>
    </form>
</div>
@endsection