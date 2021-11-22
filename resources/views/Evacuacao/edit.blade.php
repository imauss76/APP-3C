@extends('layouts.app')
 
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
    
    <br>
    <form action={{route('evacuacao.update', ['evacuacao' => $eva])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$eva->id}}>
        
        <div>
        <h3>Editar Registro:</h3>
        </div>

        <div>
    <label for="data_evacuacao"><strong>Data da Evacuação:</strong></label>
    <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
        color: black; border: none; font-size: 14px;" type="date" id="data_evacuacao" name="data_evacuacao" value="{{$eva->data_evacuacao}}">  
</div>

<div>
    <label for="relator"><strong>Relator:</strong></label>
    <select name="relator" id="relator" style="width: 200px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
        color: black; border: none; font-size: 14px;">
        <option value="{{$eva->relator}}"></option>
            <?php
            $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
            mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
            $sql = mysqli_query($conn,"SELECT id, name FROM users u 
            WHERE EXISTS (SELECT usuario_interno FROM solicitar_acesso_internos i WHERE u.id = i.usuario_interno) order by name");
            while($row = mysqli_fetch_assoc($sql)){
                echo "<option value=".$row['id'].">".$row['name']."</option>";
            }?>
    </select>
</div>

<div>
    <label for="turno"><strong>Turno Ocorrido:</strong></label>
    <select style="width: 80px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
        color: black; border: none; font-size: 14px;" type="text" id="turno" name="turno">
        <option value="{{ $eva->turno }}"></option>
        <option value="Manhã">Manhã</option>
        <option value="Tarde">Tarde</option>
        <option value="Noite">Noite</option>
    </select>        
</div>

<div>
    <label for="setor_sinistro"><strong>Setor do Sinistro:</strong></label>
    <select name="setor_sinistro" id="setor_sinistro" style="width: 200px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
        color: black; border: none; font-size: 14px;">
        <option value="{{$eva->setor_sinistro}}"></option>
            <?php
            $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
            mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
            $sql = mysqli_query($conn,"SELECT id, nome FROM setors WHERE id >= 1 ORDER BY nome");
            while($row = mysqli_fetch_assoc($sql)){
                echo "<option value=".$row['id'].">".$row['nome']."</option>";
            }?>
    </select>
</div>

<div>
    <label for="causa_sinistro"><strong>Causa do Sinistro:</strong></label><br>
    <input Style="width:500px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
        color: black; border: none; font-size: 14px;" type="text" name="causa_sinistro" id="causa_sinistro" value="{{$eva->causa_sinistro}}"></input>
</div>
<br>

<div>
    <label for="hora_inicio"><strong>Hora Inicial:</strong></label>
    <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
        color: black; border: none; font-size: 14px;" type="time" id="hora_inicio" name="hora_inicio" value="{{$eva->hora_inicio}}">  
</div>

<div>
    <label for="hora_final"><strong>Hora Final:</strong></label>
    <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
        color: black; border: none; font-size: 14px;" type="time" id="hora_final" name="hora_final" value="{{$eva->hora_final}}">  
</div>

<div>
    <label for="descricao_evacuacao"><strong>Descrição da Evacuação:</strong></label><br>
    <input Style="width:500px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
        color: black; border: none; font-size: 14px;" type="text" name="descricao_evacuacao" id="descricao_evacuacao" value="{{$eva->descricao_evacuacao}}"></input>
</div>
<div>
    <label for="pontos_positivos"><strong>Pontos Positivos:</strong></label><br>
    <input Style="width:500px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
        color: black; border: none; font-size: 14px;" type="text" name="pontos_positivos" id="pontos_positivos" value="{{$eva->pontos_positivos}}"></input>
</div>
<div>
    <label for="pontos_negativos"><strong>Pontos Negativos:</strong></label><br>
    <input Style="width:500px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
        color: black; border: none; font-size: 14px;" type="text" name="pontos_negativos" id="pontos_negativos" value="{{$eva->pontos_negativos}}"></input>
</div>
                       
        <br>
            <div class="form-group">
                <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer; color: black; border: none; font-size: 14px;" type="submit" name="save_eva" value="Atualizar"></input>
                <input style=" width:70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: black; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar"></input>
            </div>
        </div>
    </form>
</div>
@endsection