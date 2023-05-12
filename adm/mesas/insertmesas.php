<?php
    require('../connectdb.php');
    $nomeMesa = $_POST['nomeMesa'];
    $precoMesa = $_POST['precoMesa'];
    $capacidadeMesa = $_POST['capacidadeMesa'];
    $descMesa = $_POST['descMesa'];

    $query = "INSERT INTO mesas VALUES (0,'$nomeMesa','$precoMesa','$capacidadeMesa','$descMesa')";

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