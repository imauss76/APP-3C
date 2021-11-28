<form action={{route('elemento.store')}} method="post" autocomplete="off">
    {{ csrf_field() }}
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    

    <div>
    <h3>Incluir Novo Elemento:</h3>
    </div>

    <table>
        <tr>
            <tr>
                <td><label for="nome"><strong>Nome:</strong></label>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" id="nome" name="nome" placeholder="Digite a nome.">                    
            </tr>

            <tr>
                <td><label for="valor"><strong>Valor R$:</strong></label>
                <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                    color: black; border: none; font-size: 14px;" type="text" id="valor" name="valor" placeholder="Digite o valor.">                    
            </tr>


        </tr>

    </table>    
    <br>