<?php
$conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));

function retorna($nome, $conn){

    $result_user = "SELECT * FROM users WHERE name = '$nome'";
    $result_user = mysqli_query($conn, $result_user);
    if($result_user->num_rows){
        $row_user = mysqli_fetch_assoc($result_user);
        $valores['email'] = $row_user['email'];
    }else{
        $valores['email'] = 'E-mail não encontrado!';
    };

    return json_encode($valores);    
};
if(isset($_GET['nome'])){
    echo retorna($_GET['nome'], $conn);
};
?>