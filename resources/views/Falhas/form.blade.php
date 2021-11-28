<form action={{route('falha.store')}} method="post" autocomplete="off">
    {{ csrf_field() }}
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    

    <div>
    <h3>Incluir Nova Falha:</h3>
    </div>

    <table>

        <tr>
            <td><label for="origem"><strong>Origem:</strong></label></td>
            <td><select style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="origem" name="origem">
                <option value="">   </option>
                <option value="Elétrica">Elétrica</option>
                <option value="Mecânica">Mecânica</option>
            </select></td>        
        </tr>

        <tr>
            <td><label for="elemento"><strong>Elemento:</strong></label>

            <td><select name="elemento" id="elemento" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option selected></option>

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
            color: black; border: none; font-size: 14px;" type="text" id="descricao" placeholder="Descreva a falha." name="descricao"></td>
        </tr>

    </table>    
    <br>