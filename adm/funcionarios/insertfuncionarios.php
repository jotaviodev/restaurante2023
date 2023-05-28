<?php
    require('../connectdb.php');
    $nomeDoAdm = $_POST['nomeDoAdm'];
    $cpfDoAdm = $_POST['cpfDoAdm'];
    $sexoDoAdm = $_POST['sexoDoAdm'];
    $cargoDoAdm = $_POST['cargoDoAdm'];
    $salarioDoAdm = (double)$_POST['salarioDoAdm'];
    $emailDoAdm = $_POST['emailDoAdm'];
    $senhaDoAdm = $_POST['senhaDoAdm'];
    $telefoneDoAdm = $_POST['telefoneDoAdm'];
    $fotoDoAdm = $_POST['fotoDoAdm'];

    $query = "INSERT INTO funcionarios VALUES (0,'$nomeDoAdm','$cpfDoAdm','$sexoDoAdm','$cargoDoAdm','$emailDoAdm','$senhaDoAdm','$telefoneDoAdm','$fotoDoAdm','$salarioDoAdm')";

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