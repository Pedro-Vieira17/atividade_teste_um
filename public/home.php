<?php
// iniciar sessão no servidor
    session_start();
    // protege o usuario caso tente entrar direto na pagina de home. Caso ele tente, vai te jogar para o index.php
    if(!isset($_SESSION["usuario"])){
        header("Location: ../index.php");
        exit();
    }

    
    //incluir conexão com o banco
    include("../infra/db/connect.php");

    // verifica se o usuario enviou um formulario usando POST.
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // variaveis
        $novoUsuario = $_POST["usuario"];
        $novaSenha = $_POST["senha"];

        // adicionar um novo usuario no banco. usuario e senha.
        $sql = "INSERT INTO users(username, password) VALUES ('$novoUsuario','$novaSenha')";

        // mostra se o usuario foi cadastrado ou nao foi cadastrado no banco de Dados. Utilizando ===TRUE
        if($conn->query($sql) === TRUE){

            echo "<script> alert('Usuário Cadastrado com Sucesso!');</script>";

        }else{
            echo "<script> alert('Erro: Usuário Não Cadastrado!');</script>";  
        }

    }

?>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

    <?php
    // incluir navbar
    include("components/navbar.php") 
    ?>

    <!-- bem vindo, "nome do usuario" -->
    <h1>Bem vindo, <?php echo $_SESSION["usuario"]; ?> </h1>
    
<!-- sair do home -->
    <a href="logout.php">Sair</a>

    <!-- cadastrar novos usuarios -->
    <hr> 
    <h3>Cadastrar Novos Usuários</h3>
    <form method="POST">
        <label>Usuario</label>
        <input type="text" name="usuario"> <br>
        <label>Senha</label>
        <input type="password" name="senha"> <br>
        <br>
        <button type="submit">cadastrar</button>
    </form>

    <hr>

    <!-- incluir tabela.php -->
    <?php 
    include("components/table.php")
    ?>


</body>
</html>