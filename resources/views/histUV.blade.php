<?php
        
        $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
        mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
        $sql = mysqli_query($conn,"SELECT * INTO OUTFILE 'C:/arquivos/Acesso_Usuario_Externo/arquivo.txt' FROM solicitar_acesso_externos ORDER BY usuario_visitante");
?>
