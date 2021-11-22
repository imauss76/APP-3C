<form action={{route('rota.store')}} method="post" autocomplete="off">
    {{ csrf_field() }}
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
    <h3>Incluir Nova Rota:</h3>
    </div>
    
