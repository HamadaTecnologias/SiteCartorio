<?php
    session_start();
    $doc = $_POST['DocumentoDevedor'];
    include 'conectar_db.php';
    // Variavel com o comando SQL
    $query = "select Devedor,DocumentoDevedor from ConsultaProtesto where DocumentoDevedor = '".$doc."'"; 
    $protesto = mysqli_query($con,$query);
    $linha = mysqli_fetch_assoc($protesto);

    if($linha['DocumentoDevedor'] == $doc){
        $i=1;
        while($linha = mysqli_fetch_assoc($protesto)){
            $i++;
           
            }
        $_SESSION['i'] = $i;
        $_SESSION['DocumentoDevedor'] = $doc;
        $_SESSION['Devedor'] = $linha['Devedor'];
        header('location:consulta_protesto.php?protesto_ok=true');
        exit;

    
    }else{
        header('location:consulta_protesto.php?protesto_error=true');
        exit;
    }



?>