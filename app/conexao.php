<?php
$servername =  "mysql-connection";
$username = "root";
$password = "Senha123";
$database = "meubanco"

//Criar Conexão

$link = new mysqli($servername, $username,  $password, $database);

/* check connection */
if (mysqli_connect_errno()){
    printf("Connect failed: %sz\n", mysqli_connect_errno());
    exit();
}

?>

