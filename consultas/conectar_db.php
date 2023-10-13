<?php

//Credenciais PhP MyAdmin
$host = "cartorio1oficio.mysql.uhserver.com";
$user = "erick1";
$password = "Erick@6477";
$database = "cartorio1oficio";

//Conexão
$con = mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_error()){
    echo "erro de conexão";
}




?>