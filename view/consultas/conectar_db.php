<?php

//Credenciais PhP MyAdmin
$host = "teste9.mysql.uhserver.com";
$user = "erick11";
$password = "Erick@6477";
$database = "teste9";

//Conexão
$con = mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_error()){
    echo "erro de conexão";
}




?>