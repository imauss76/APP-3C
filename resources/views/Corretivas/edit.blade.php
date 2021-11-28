@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
    
    <br>
    <form action={{route('corretiva.update', ['corretiva' => $cor])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$cor->id}}>
        
        <div>
        <h3>Editar Corretiva:</h3>
        <h6 style=" color:red;">* Campos Obrigatórios!</h6>
    <div>
            @if ($errors->any())
                <h6 style=" color:red;">Há erros de preenchimento!</h6>
            @endif
    </div>
        </div>

    <div class="form-row">

    <div class="form-group col-md-4">
        <label for="data_corretiva"><strong>* Data da Corretiva:</strong></label>
        <input class="form-control" style=" background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="date" id="data_corretiva" name="data_corretiva" value="{{$cor->data_corretiva}}" onkeypress="return false">  
    </div>

    <div class="form-group col-md-4">
        <label for="hora_inicio"><strong>* Hora Inicial:</strong></label>
        <input class="form-control" style=" background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="time" id="hora_inicio" name="hora_inicio" value="{{$cor->hora_inicio}}" onkeypress="return false">  
    </div>

    <div class="form-group col-md-4">
        <label for="hora_final"><strong>* Hora Final:</strong></label>
        <input class="form-control" style=" background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="time" id="hora_final" name="hora_final" value="{{$cor->hora_final}}" onkeypress="return false">  
    </div>

    <div class="form-group col-md-6">
        <label for="relator"><strong>* Relator:</strong></label>
        <select class="form-control" name="relator" id="relator" style=" background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option value="{{ $cor->relator }}">{{ $cor->userCor->name }}</option>
                <?php
                $conn = mysqli_connect('localhost','root','','app-3c')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, name FROM users WHERE id >=1 order by name");
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                }?>
        </select>
    </div>

    <div class="form-group col-md-6">
        <label for="setor"><strong>* Setor:</strong></label>
        <select class="form-control" name="setor" id="setor" style=" background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option value="{{ $cor->setor }}">{{ $cor->setorCor->nome }}</option>
                <?php
                $conn = mysqli_connect('localhost','root','','app-3c')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, nome FROM setors WHERE id >= 1 ORDER BY nome");
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['nome']."</option>";
                }?>
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="motor"><strong>* Motor:</strong></label>
        <select class="form-control" name="motor" id="motor" style=" background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option value="{{ $cor->motor }}">{{ $cor->motorCor->tag }}</option>
                <?php
                $conn = mysqli_connect('localhost','root','','app-3c')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, tag FROM motors WHERE id >= 1 ORDER BY tag");
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['tag']."</option>";
                }?>
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="elemento"><strong>* Elemento:</strong></label>
        <select class="form-control" name="elemento" id="elemento" style=" background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option value="{{ $cor->elemento }}">{{ $cor->elementoCor->nome }}</option>
                <?php
                $conn = mysqli_connect('localhost','root','','app-3c')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, nome FROM elementos WHERE id >= 1 ORDER BY nome");
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['nome']."</option>";
                }?>
        </select>
    </div>
    
    <div class="form-group col-md-4">
        <label for="falha"><strong>* Falha:</strong></label>
        <select class="form-control" name="falha" id="falha" style=" background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option value="{{ $cor->falha }}">{{ $cor->falhaCor->descricao }}</option>
                <?php
                $conn = mysqli_connect('localhost','root','','app-3c')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, descricao FROM falhas WHERE id >= 1 ORDER BY id");
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['descricao']."</option>";
                }?>
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="descricao_causa"><strong>* Descrição da Causa:</strong></label><br>
        <input class="form-control" Style=" height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="descricao_causa" id="descricao_causa" value="{{$cor->descricao_causa}}"></input>
    </div>
    <br>

    <div class="form-group col-md-4">
        <label for="descricao_corretiva"><strong>* Descrição da Corretiva:</strong></label><br>
        <input class="form-control" Style=" height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="descricao_corretiva" id="descricao_corretiva" value="{{$cor->descricao_corretiva}}"></input>
    </div>

    <div class="form-group col-md-4">
        <label for="acao_bloqueio"><strong>* Ação de Bloqueio:</strong></label><br>
        <input class="form-control" Style=" height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="acao_bloqueio" id="acao_bloqueio" value="{{$cor->acao_bloqueio}}"></input>
    </div>    
                        
            <br>
                <div class="form-group">
                    <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 4px;
                cursor: pointer; color: black; border: none; font-size: 14px;" type="submit" name="save_cor" value="Atualizar"></input>
                    <input style=" width:70px; background: red; border-radius: 6px; padding: 4px;
                cursor: pointer;color: black; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar"></input>
                </div>
            </div>
        </form>
    </div>
@endsection