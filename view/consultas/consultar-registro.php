<?php
    session_start();
    $protocolo = $_POST['Protocolo'];
    include 'conectar_db.php';
    // Variavel com o comando SQL
    $query = "select * from ConsultaRegistro where Protocolo = '".$protocolo."'"; 
    $registro = mysqli_query($con,$query);
    $linha = mysqli_fetch_assoc($registro);

    if($linha['Protocolo'] == $protocolo){
        $_SESSION['Protocolo'] = $protocolo;
        header('location:consulta_registro.php?protocolo_ok=true');
        exit;

    }else{
        header('location:consulta_registro.php?protocolo_error=true');
        exit;
    }



?>






