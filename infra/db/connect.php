<?php

    // armazena os dados de acesso ao banco de dados
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";

    // abre a conexão entre o PHP e o banco MySQL
    $conn = new mysqli($host,$user,$pass,$db);

    // mostrar se ouve a conexão com o banco ou não
    if ($conn->connect_error){
        echo "<script> console.log('erro na conexão com o banco') </script>";
    }else{
        echo "<script> console.log('conexão com o banco foi um sucesso')</script>";
    }

?>