<?php
require("../connectdb.php");
    $nomeDoProduto = $_POST['nomeDoProduto'];
    $ingredientesDoProduto = $_POST['ingredientesDoProduto'];
    $precoDoProduto = $_POST['precoDoProduto'];
    $tipoDoAlimento = $_POST['tipoDeAlimento'];
    $fotoProduto = $_POST['fotoProduto'];

    $query = "INSERT INTO produtos VALUES (0,'$nomeDoProduto','$ingredientesDoProduto','$precoDoProduto','$tipoDoAlimento','$fotoProduto')";

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