<?php
                $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, name FROM users u
                WHERE NOT EXISTS (SELECT nome FROM solicitar_acesso_internos i WHERE u.name = i.nome) AND NOT EXISTS (SELECT nome FROM solicitar_acesso_externos e WHERE u.name = e.nome)");
                if($row = mysqli_fetch_assoc($sql)){
                    echo 'Voce já esta cadastrado.'
                    
                }?>