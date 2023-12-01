<?php
    session_start();
    $cpf = $_POST['Cpf'];
    include 'conectar_db.php';
    // Variavel com o comando SQL
    $query = "select Nome,Cpf from ConsultaFirma where Cpf = '".$cpf."'"; 
    $firma = mysqli_query($con,$query);
    $linha = mysqli_fetch_assoc($firma);

    if($linha['Cpf'] == $cpf){

        $_SESSION['Cpf'] = $cpf;
        $_SESSION['Nome'] = $linha['Nome'];
        header('location:consulta_firma.php?firma_ok=true');
        exit;

    }else{
        header('location:consulta_firma.php?firma_error=true');
        exit;
    }



?>