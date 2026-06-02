<h3>Usuários Cadastrados</h3>
<!-- borda da tabela e padding da celula -->
<table border="1" cellpadding="3"> 
<!-- cabeçalho da tabela -->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
    </tr>

    <?php
    // select da tabela users
    $sqlUsuarios = "SELECT * FROM users";
    // envia a consulta SQL para o banco e guarda o resultado
    $resultadoUsuarios = $conn->query($sqlUsuarios);
    
    // ver todos os registros retornados e exibi-los em uma tabela
    // fecth_assoc: proxima linha, proxima linha, proxima linha..... da matriz
    while($linha = $resultadoUsuarios->fetch_assoc()){

        echo "
        <tr>
            <td>" . $linha["id"]."</td>
            <td>" . $linha["username"]."</td>
            <td>" . $linha["password"]."</td>
        </tr>
        ";

    }


    ?>

</table>