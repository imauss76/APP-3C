@extends('layouts.app')
 
@section('content')
<div class="container">

<!-- O código abaixo envia mensagem dos erros no formulário -->

    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

    <div class="row">
        @include('corretivas.form')
        <br>
        <div class="form-group">
            <input style="width:70px; background: #069cc2; border-radius: 6px; padding: 6px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="save_cor" value="Salvar">
            
            <input style="width:70px; background: red; border-radius: 6px; padding: 6px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
        </div>
    </div>
    </form>
</div>
@endsection