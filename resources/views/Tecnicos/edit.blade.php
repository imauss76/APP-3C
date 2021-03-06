@extends('layouts.app')
 
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
    <br>
    
    <form action={{route('tecnico.update', ['tecnico' => $tec])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value="{{$tec->id}}">
        
        <div>
        <h3>Editar Técnico - {{$tec->usertec->name}}:</h3> 
        </div>

        <table>

        <tr>
                <td><label for="matricula"><strong>Matricula:</strong></label>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" id="matricula" name="matricula" value="{{$tec->matricula}}" placeholder="Digite a Matricula.">                    
            </tr>

            <td><label for="nome"><strong>Nome:</strong></label>

            <td><select name="nome" id="nome" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;">
                <option value="{{ $tec->nome }}">{{ $tec->usertec->name }}</option>
                
                    <?php
                    $conn = mysqli_connect('localhost','root','','app-3c')or die(mysqli_error());
                    mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                    $sql = mysqli_query($conn,"SELECT id, name FROM users order by name");
                    while($row = mysqli_fetch_assoc($sql)){
                        echo "<option value=".$row['id'].">".$row['name']."</option>";                        
                    }?>
            </select>            
        </tr>

        <tr>
            <td><label for="funcao"><strong>Função:</strong></label></td>
            <td><select style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="funcao" name="funcao">
                <option value="{{ $tec->funcao }}">{{ $tec->funcao }}</option>
                <option value="Eletromecânico">Eletromecânico</option>
                <option value="Eletrotécnico">Eletrotécnico</option>
                <option value="Mecânico">Mecânico</option>
                <option value="Programador Manutenção">Programador Manutenção</option>
                <option value="Supervisor">Supervisor</option>
            </select></td>        
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