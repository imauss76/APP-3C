<form action={{route('evacuacao.store')}} method="post" autocomplete="off">
    {{ csrf_field() }}
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>

    <div>
    <h3>Registrar Evacuação:</h3>
    </div>

    <div>
        <label for="data_evacuacao"><strong>Data da Evacuação:</strong></label>
        <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="date" id="data_evacuacao" name="data_evacuacao" value="dd/mm/yyyy">  
    </div>

    <div>
        <label for="relator"><strong>Relator:</strong></label>
        <select name="relator" id="relator" style="width: 200px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option selected></option>
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
            <option value="">   </option>
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>
        </select>        
    </div>

    <div>
        <label for="setor_sinistro"><strong>Setor do Sinistro:</strong></label>
        <select name="setor_sinistro" id="setor_sinistro" style="width: 200px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option selected></option>
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
            color: black; border: none; font-size: 14px;" type="text" name="causa_sinistro" id="causa_sinistro"></input>
    </div>
    <br>

    <div>
        <label for="hora_inicio"><strong>Hora Inicial:</strong></label>
        <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="time" id="hora_inicio" name="hora_inicio" value="hh:mm:ss">  
    </div>

    <div>
        <label for="hora_final"><strong>Hora Final:</strong></label>
        <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="time" id="hora_final" name="hora_final" value="hh:mm:ss">  
    </div>

    <div>
        <label for="descricao_evacuacao"><strong>Descrição da Evacuação:</strong></label><br>
        <input Style="width:500px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="descricao_evacuacao" id="descricao_evacuacao"></input>
    </div>
    <div>
        <label for="pontos_positivos"><strong>Pontos Positivos:</strong></label><br>
        <input Style="width:500px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="pontos_positivos" id="pontos_positivos"></input>
    </div>
    <div>
        <label for="pontos_negativos"><strong>Pontos Negativos:</strong></label><br>
        <input Style="width:500px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="pontos_negativos" id="pontos_negativos"></input>
    </div>
