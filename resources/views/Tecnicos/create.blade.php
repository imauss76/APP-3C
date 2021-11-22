@extends('layouts.app')
 
@section('content')
<div class="container-fluid">
    <div class="row-fluid">

        @include('Tecnicos.form')
        <div class="form-group">
            <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 6px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="save_tec" value="Salvar">
            <input style=" width:70px; background: red; border-radius: 6px; padding: 6px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
        </div>
    </div>
    </form>
</div>
@endsection