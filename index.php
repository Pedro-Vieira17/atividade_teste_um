<?php

// iniciar sessão no servidor
session_start();

//incluir conexão com o banco
include("infra/db/connect.php");

// verifica se o usuario enviou um formulario usando POST.
if($_SERVER["REQUEST_METHOD"] == "POST"){

// variaveis para receber os dados do usuario enviada do formulario
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

// informar se o usuario foi ou nao captado
    echo "<script> console.log('usuario captado com sucesso $usuario') </script>"; 
    echo "<script> console.log('senha captado com sucesso $senha') </script>";

// select no banco que o usuario enviou
    $sql = "SELECT * FROM users WHERE username ='$usuario' AND password ='$senha'";

// guarda a matriz dentro do console do navegador
    $resultado = $conn -> query($sql);

// se der certo o login, vai te enviar para a home, se nao, vai dar erro
    if($resultado->num_rows > 0){
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
    <?php //icluir navbar
    include("public/components/navbar.php") 
    ?>
    <h1>Tela de Login - PHP</h1> 
    <form method="POST"> 

    
        <label>Usuario</label> 
        <input type="text" name="usuario"> <br>
        <label>Senha</label>
        <input type="password" name="senha"> <br>
        <?php
        
        if(isset($erro)){ //mostrar se der erro
            echo $erro;
        }
        
        ?>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>