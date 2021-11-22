<form action={{route('setor.store')}} method="post" autocomplete="off">
    {{ csrf_field() }}
    
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
    <h3>Incluir Novo Setor:</h3>
    </div>
        <table>
            <tr>
                <td><label for="nome">Nome do Setor:</label></td>
                <td><input style="width: 300px;  background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="nome" placeholder="Digite o setor" name="nome"></td>
            </tr>

            <tr>
                <td><label for="usuario_responsavel">Responsável do Setor:</label></td>
    
                <td><select name="usuario_responsavel" id="usuario_responsavel" style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;">
                <option selected></option>

                <?php
                    $conn = mysqli_connect('localhost','root','','app-3c')or die(mysqli_error());
                    mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                    $sql = mysqli_query($conn,"SELECT id, name FROM users WHERE id >= 1 order by name");
                     while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['name']."</option>";}
                ?>

                </select></td>
            </tr>
            <tr>
                <td><label for="descricao">Descrição do Setor:</label></td>
                <td><input style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="descricao" placeholder="Descreva o Setor" name="descricao"></td>
            </tr>
        </table>
    
