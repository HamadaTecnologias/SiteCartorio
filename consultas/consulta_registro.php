<?php

    $protocolo = $_POST['Protocolo'];
    

    include 'conectar_db.php';
    
    // Variavel com o comando SQL
    $query = "select * from ConsultaRegistro where Protocolo = '".$protocolo."'"; 

    $registro = mysqli_query($con,$query);
    
    echo "<h3>Contato encontrado:</h3>";
    // Armazena num array associativo
    while($linha = mysqli_fetch_assoc($registro)){
    echo "Data Entrada: ".$linha['DataEntrada']." | Matricula:" .$linha['Matricula']."<br>";
    }

?>