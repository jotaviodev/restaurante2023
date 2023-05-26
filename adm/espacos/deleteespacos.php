<?php
    require("../connectdb.php");
    $id = $_GET['id'];

    $query1 = "DELETE FROM reservaespaco where id_espaco = '$id' ";
    $query2 = "DELETE FROM espacos where id_espaco = '$id' ";
    $deletar = $conn->query($query1);
    $deletar2 = $conn->query($query2);
    $deletar->execute();
    $deletar2->execute();

    header ("location: lerespacos.php");
?>

