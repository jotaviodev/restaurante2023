<?php
    require("../connectdb.php");
    $id = $_GET['id'];

    $query = "DELETE FROM mesas where id_mesa = '$id' ";
    $deletar = $conn->query($query);
    $deletar->execute();

    header ("location: lermesas.php");
?>

