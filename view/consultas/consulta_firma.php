<?php

    $cpf = $_POST['Cpf'];
    

    include 'conectar_db.php';
    
    // Variavel com o comando SQL
    $query = "select Nome,Cpf from ConsultaFirma where Cpf = '".$cpf."'"; 

    $firma = mysqli_query($con,$query);
    
    echo "<h3>Contato encontrado:</h3>";
    // Armazena num array associativo
    while($linha = mysqli_fetch_assoc($firma)){
    echo "Nome: ".$linha['Nome']." | CPF:" .$linha['Cpf']."<br>";
    }

?>