<?php
session_start();
 require("../login.php");
 require('../connectdb.php');
    $id_mesa = $_GET['id'];
    $id_clientereserva = $_SESSION['id'];
    $data_reservamesa = $_POST['data_reservamesa'];
    $horario_reserva = $_POST['horario_reserva'];

    $query = "INSERT INTO reservamesa VALUES (0,'$id_clientereserva','$id_mesa','$data_reservamesa','$horario_reserva')";

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