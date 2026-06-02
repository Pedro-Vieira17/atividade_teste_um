<?php

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";

    $conn = new mysqli($host,$user,$pass,$db);

    if ($conn->connect_error){
        echo "<script> console.log('erro na conexão com o banco') </script>";
    }else{
        echo "<script> console.log('conexão com o banco foi um sucesso')</script>";
    }

?>