@extends('layouts.app')
 
@section('content')
<div class="container-fluid">
    <div class="row-fluid">

    <br>
    <form action={{route('Motor.update', ['Motor' => $mtr])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$mtr->id}}>
        <div>
            <h3>Editar Motor "{{$mtr->tag}}":</h3>
        </div>

        <table>
        <tr>
            <td><label for="tag"><strong>Tag do Motor:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="tag" name="tag" value="{{$mtr->tag}}" placeholder="Informe a Tag do Motor."></td>
        </tr>

        <tr>
            <td><label for="potencia"><strong>Potência - CV:</strong></label></td>
            <td><select style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="potencia" name="potencia">
                <option value="{{ $mtr->potencia }}">{{ $mtr->potencia }}</option>
                <option value="1,0 CV">1,0 CV</option>
                <option value="5,0 CV">5,0 CV</option>
                <option value="10,0 CV">10,0 CV</option>
                <option value="25,0 CV">25,0 CV</option>
                <option value="50,0 CV">50,0 CV</option>
                <option value="75,0 CV">75,0 CV</option>
                <option value="100,0 CV">100,0 CV</option>
            </select></td>        
        </tr>

        <tr>
            <td><label for="polos"><strong>Núm. Pólos:</strong></label></td>
            <td><select style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="polos" name="polos">
                <option value="{{ $mtr->polos }}">{{ $mtr->polos }}</option>
                <option value="2 pólos">2 pólos</option>
                <option value="4 pólos">4 pólos</option>
                <option value="6 pólos">6 pólos</option>
                <option value="8 pólos">8 pólos</option>
            </select></td>        
        </tr>

        <tr>
            <td><label for="carcaca"><strong>Tamanho da Carcaça:</strong></label></td>
            <td><select style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="carcaca" name="carcaca">
                <option value="{{ $mtr->carcaca }}">{{ $mtr->carcaca }}</option>
                <option value="80">80</option>
                <option value="112">112</option>
                <option value="132M">132M</option>
                <option value="160S/M">160S/M</option>
                <option value="250M">250M</option>
            </select></td>        
        </tr>


        <tr>
            <td><label for="fabricante"><strong>Fabricante:</strong></label></td>
            <td><select style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="fabricante" name="fabricante">
                <option value="{{ $mtr->fabricante }}">{{ $mtr->fabricante }}</option>
                <option value="ABB">ABB</option>
                <option value="WEG">WEG</option>
                <option value="SEW">SEW</option>
                <option value="SIEMENS">SIEMENS</option>
            </select></td>        
        </tr>

        <tr>
            <td><label for="setor"><strong>Setor em utilização:</strong></label></td>

            <td><select name="setor" id="setor" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option selected="{{ $mtr->setor }}">{{ $mtr->setormtr->nome }}</option>
                 <?php 
                $conn = mysqli_connect('localhost','root','','app-3c')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, nome FROM setors WHERE id >= 1 order by nome");

                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['nome']."</option>";
                }?>
            </select></td>

        </tr>
    </table>

        <br>
            <div class="form-group">
                <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="save_mtr" value="Atualizar">
                <input style=" width:70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
            </div>
        </div>
    </form>
</div>
@endsection