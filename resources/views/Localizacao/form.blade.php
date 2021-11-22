<form action={{route('localizacao.store')}} method="post">
   {{ csrf_field() }}
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>

    <div>
    <h3>Nova Localização:</h3>
    </div>

    <div>
    <label for="usuario"><strong>Usuário:</strong></label>
    
    <select name="usuario" id="usuario" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
    <option selected></option>

        <?php
                $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, name FROM users WHERE id >= 1 order by name");
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                    
        }?>

    </select>
    </div>
    
    <div>
        <label for="ponto_localizado"><strong>Localização:</strong></label>

        <select name="ponto_localizado" id="ponto_localizado" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option selected></option>
                <?php
                $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, descricao FROM ponto_monitorados WHERE id >= 1 order by descricao");

                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['descricao']."</option>";
                }?>
        </select>

    </div>
