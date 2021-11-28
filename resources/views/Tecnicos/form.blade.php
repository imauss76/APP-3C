<form action={{route('tecnico.store')}} method="post" autocomplete="off">
    {{ csrf_field() }}
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    

    <div>
    <h3>Incluir Novo Técnico:</h3>
    </div>

    <table>
        <tr>
            <tr>
                <td><label for="matricula"><strong>Matricula:</strong></label>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" id="matricula" name="matricula" placeholder="Digite a Matricula.">                    
            </tr>

            <td><label for="nome"><strong>Nome:</strong></label>

            <td><select name="nome" id="nome" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;">
                <option selected></option>
                
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
                <option value="">   </option>
                <option value="Eletromecânico">Eletromecânico</option>
                <option value="Eletrotécnico">Eletrotécnico</option>
                <option value="Mecânico">Mecânico</option>
                <option value="Programador Manutenção">Programador Manutenção</option>
                <option value="Supervisor">Supervisor</option>
            </select></td>        
        </tr>
    </table>    
    <br>