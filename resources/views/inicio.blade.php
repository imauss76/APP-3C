<!Doctype html lang="pt-br">
  <head>
    <title>System - 3C - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
  </head>
  <body style=" background: #C0C0C0;">
  <nav class="navbar navbar-inverse navbar-fixed-top"> <!--menu fixado no topo-->
    <div class="container-fluid">
      <div class="navbar-header" style=" color:white;">
      
        <!-- <a class="navbar-brand" href="#" >EVAC</a> -->
      </div>
        <ul class="nav navbar-nav">

        <li> <a style=" color: white; background: #4F4F4F;" href="sobre"> <strong>SOBRE APP-3C</strong> </a> </li>


          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros <span class="caret"></span></a>
            <ul class="dropdown-menu">

                <li><a href="/Setor">Setores</a></li>
                <li><a href="/Motor">Motores</a></li>
                <li><a href="/Tecnico">Técnicos</a></li> <!--Acesso de Cadastro Somente p/ Usuario Admin-->           
                <li><a href="/solicitarAcessoExterno">Itens do Motor</a></li>          
                <li><a href="fazendo">Tipo da Falha</a></li>
                <li><a href="fazendo">Causa da Falha</a></li>

            </ul>
          </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Listas <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="visupdfstr">Lista de Setores</a></li> <!-- lista de Usuários Externos cadastrados no sistema  -->
            <li ><a href="visupdfmtr">Lista de Motores</a></li> <!-- lista de Usuários Externos cadastrados no sistema  -->
            <li><a href="fazendo">Lista de ...1</a></li><!-- lista de Usuários Internos cadastrados no sistema  -->
            <li><a href="fazendo">Lista de ...2</a></li> <!-- lista de Usuários Externos cadastrados no sistema  -->
          </ul>
        </li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registro de Corretivas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="visupdfev" style=" color: black;">Corretivas Registradas</a></li> <!-- lista de Usuários presentes no local em uma determinada data ou intervalo de  data  -->
            <li><a href="evacuacao" style=" color: black;">Registrar Corretivas</a></li> <!-- Formulário para registro da Evacução  -->
          </ul>	
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
      </ul>
    </div>
  </nav>
    
  <div class="Evac" style=" color:white;">
  <br><br><br><br>
    <h1 style=" color:black;" class='text-center'>System - 3C</h1>
    <br>
    <h1 style=" color:black;" class='text-center'> Controle de Custos em Corretivas. </h1>
  <br>
  <h1 style=" color:black;" class='text-center'>Diminuir para CRESCER!</h1>

  </div>

    
</div>

  </body>
  </html>
