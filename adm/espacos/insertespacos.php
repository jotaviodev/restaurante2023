<?php
    require('../connectdb.php');
    $nomeEspaco = $_POST['nomeEspaco'];
    $precoEspaco = $_POST['precoEspaco'];
    $descEspaco = $_POST['descEspaco'];
    $fotoEspaco = $_POST['fotoEspaco'];

    $query = "INSERT INTO espacos VALUES (0,'$nomeEspaco','$precoEspaco','$fotoEspaco','$descEspaco')";

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