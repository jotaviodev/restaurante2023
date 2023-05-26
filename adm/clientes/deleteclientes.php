<?php
    require("../connectdb.php");
    $id = $_GET['id'];

    $query1 = "DELETE FROM reservaespaco where id_clientereserva = '$id' ";
    $query2 = "DELETE FROM reservamesa where id_clientereserva = '$id' ";
    $query3 = "DELETE FROM cliente where id_cliente = '$id' ";
    $deletar = $conn->query($query1);
    $deletar2 = $conn->query($query2);
    $deletar3 = $conn->query($query3);
    $deletar->execute();
    $deletar2->execute();
    $deletar3->execute();

    header ("location: lerclientes.php");
?>

