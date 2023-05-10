<?php
    require('../connectdb.php');
    $nome = $_POST['nome_usuario'];
    $sexo = $_POST['sexo_usuario'];
    $email = $_POST['email_usuario'];
    $senha = $_POST['senha_usuario'];
    $telefone = $_POST['telefone_usuario'];
    $foto = $_POST['foto_usuario'];

    $query = "INSERT INTO cliente VALUES (0,'$nome','$sexo','$email','$senha','$telefone','$foto')";

// Executa a query
$inserir = $conn->query($query);

if ($inserir) {
echo "Notícia inserida com sucesso!";
} else {
echo "Não foi possível inserir a notícia, tente novamente.";
// Exibe dados sobre o erro:
echo "Dados sobre o erro:" . mysql_error();
}
?>