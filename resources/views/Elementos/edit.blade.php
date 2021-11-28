@extends('layouts.app')
 
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
    <br>
    
    <form action={{route('elemento.update', ['elemento' => $ele])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value="{{$ele->id}}">
        
        <div>
        <h3>Editar Elemento:</h3> 
        </div>

        <table>

        <tr>
                <td><label for="nome"><strong>Nome:</strong></label>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" id="matricula" name="nome" value="{{$ele->nome}}" placeholder="Digite o nome do elemento.">                    
            </tr>

            <td><label for="valor"><strong>Valor R$:</strong></label>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" id="matricula" name="valor" value="{{$ele->valor}}" placeholder="Digite o valor do elemento.">                    
            </tr>


        
        </table>
        <br>
            <div class="form-group">
                <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer; color: black; border: none; font-size: 14px;" type="submit" name="save_ele" value="Atualizar">
                <input style=" width:70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: black; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
            </div>
        </div>
    </form>
</div>
@endsection