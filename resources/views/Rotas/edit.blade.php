@extends('layouts.app')
 
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
    
    <br>
    <form action={{route('rota.update', ['rota' => $rot])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$rot->id}}>
        
        <div>
        <h3>Editar Rota:</h3>
        </div>
                       
            <div class="form-group">
                <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer; color: black; border: none; font-size: 14px;" type="submit" name="save_rot" value="Atualizar">
                <input style=" width:70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: black; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
            </div>
        </div>
    </form>
</div>
@endsection