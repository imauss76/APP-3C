@extends('layouts.app')
 
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
    <br>

    <form action={{route('solicitarAcessoExterno.update', ['solicitarAcessoExterno' => $sae])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$sae->id}}>
        
        <div>
        <h3>Editar Solicitação - {{$sae->user->name}}: </h3> 
        </div>

        <table>

            <tr>
                <td><label for="setor"><strong>Setor:</strong></label></td>
                <td><select name="setor" id="setor" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" value="{{$sae->setor}}">
                <!-- <option value="{{ $sae->setor }}">{{ $sae->setor1->nome }}</option> -->
                <option value="{{ $sae->setor }}"></option>


                    <?php
                    $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
                    mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                    $sql = mysqli_query($conn,"SELECT id, nome FROM setors WHERE id >= 1 ORDER BY nome");
                    while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['nome']."</option>";
                        }?>
                </select></td>
            </tr>

            <tr><!-- busca o nome dos responsaveis pelo setor (vincular o setor escolhido na label anterior) -->
                <td><label for="anfitriao"><strong>Anfitrião:</strong></label></td>
                <td><select name="anfitriao" id="anfitriao" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;">
                    <!-- <option value="{{ $sae->anfitriao }}">{{ $sae->visit->name }}</option> -->
                    <option value="{{ $sae->anfitriao }}"></option>

                    <?php
                        $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
                        mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                        $sql = mysqli_query($conn,"SELECT id, name FROM users u 
                        WHERE EXISTS (SELECT usuario_interno FROM solicitar_acesso_internos i WHERE u.id = i.usuario_interno) order by name");
                        while($row = mysqli_fetch_assoc($sql)){
                            echo "<option value=".$row['id'].">".$row['name']."</option>";
                        }?>
                </select></td>
            </tr>

            <tr>
                <td><label for="data_entrada"><strong>Data de Entrada:</strong></label></td>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                        color: black; border: none; font-size: 14px;" type="date" id="data_entrada" name="data_entrada" value="{{$sae->data_entrada}}"></td>  
            </tr>

            <tr>
                <td><label for="data_entrada"><strong>Data de Saída:</strong></label></td>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                        color: black; border: none; font-size: 14px;" type="date" id="data_saida" name="data_saida" value="{{$sae->data_saida}}">  
            </tr>


            <tr>
                <td><label for="usuario_visitante"><strong>Nome:</strong></label></td>

                <td><select name="usuario_visitante" id="usuario_visitante" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;">
                    <!-- <option value="{{ $sae->usuario_visitante }}">{{ $sae->user->name }}</option> -->
                    <option value="{{ $sae->usuario_visitante }}"></option>
                    
                        <?php                
                        $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
                        mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                        $sql = mysqli_query($conn,"SELECT id, name FROM users u 
                        WHERE NOT EXISTS (SELECT usuario_interno FROM solicitar_acesso_internos i WHERE u.id = i.usuario_interno) order by name");
                        while($row = mysqli_fetch_assoc($sql)){
                            echo "<option value=".$row['id'].">".$row['name']."</option>";                
                        }?>
                </select></td>
            </tr>

            <tr>
                <td><label for="matricula"><strong>Matricula:</strong></label></td>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" id="matricula" name="matricula" value="{{$sae->matricula}}"></td>
            </tr>

            <tr>
                <td><label for="email"><strong>E-mail:</strong></label></td>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" id="email" name="email" value="{{ $sae->user->email }}" readonly></td>
            </tr>

            <tr>
                <td><label for="data_nasc"><strong>Data de Nascimento:</strong></label></td>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="date" id="data_nasc" name="data_nasc" value="{{$sae->data_nasc}}"></td>
            </tr>

            <tr>
                <td><label for="cpf"><strong>CPF:</strong></label></td>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" id="cpf" name="cpf" value="{{$sae->cpf}}"></td>
            </tr>


            <tr>
                <td><label for="pessoa_contato"><strong>Pessoa para Contato:</strong></label></td>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" id="pessoa_contato" name="pessoa_contato" value="{{$sae->pessoa_contato}}"></td>
            </tr>

            <tr>
                <td><label for="tel_pessoa_contato"><strong>Tel. Pessoa de Contato:</strong></label></td>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" id="tel_pessoa_contato" name="tel_pessoa_contato" value="{{$sae->tel_pessoa_contato}}"></td>
            </tr>

            <tr>
                <td><label for="fator_rh"><strong>Fator RH:</strong></label></td>
                <td><select style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" name="fator_rh" value="{{$sae->fator_rh}}">
                    <option selected>{{$sae->fator_rh}}</option>
                    <option value="A-">A-</option>
                    <option value="A+">A+</option>
                    <option value="B-">B-</option>
                    <option value="B+">B+</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                </select></td>        
            </tr>

            <tr>
                <td><label for="contra_indicacao"><strong>Contra Indicações / Alergias:</strong></label><br></td>
                <td><input Style="width:250px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" name="contra_indicacao" id="contra_indicacao" value="{{$sae->contra_indicacao}}"></input></td>
            </tr>
        </table>
        <br>
                
        <div class="form-group">
            <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 6px;
                cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="save_sae" value="Atualizar">
        <input style=" width:70px; background: red; border-radius: 6px; padding: 6px;
                cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
        </div>
    </div>
    </form>
</div>
@endsection