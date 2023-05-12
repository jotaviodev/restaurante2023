<?php
    require('../connectdb.php');
    $nomeAtracao = $_POST['nomeAtracao'];
    $dataAtracao = $_POST['dataAtracao'];
    $horarioAtracao = $_POST['horarioAtracao'];
    $descAtracao = $_POST['descAtracao'];

    $query = "INSERT INTO atracoes VALUES (0,'$nomeAtracao','$dataAtracao','$horarioAtracao','$descAtracao')";

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