<?php
        
        $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
        mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
        $sql = mysqli_query($conn,"SELECT * INTO OUTFILE 'C:/arquivos/Ponto_Atual_Usuario_Interno/arquivo.txt' FROM hist_ponto_usuario_interno order by usuario_interno");
?>
