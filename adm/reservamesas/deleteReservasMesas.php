<?php
    require("../connectdb.php");
    $id = $_GET['id'];

    $query = "DELETE FROM reservamesa where id_reservamesa = '$id' ";
    $deletar = $conn->query($query);
    $deletar->execute();


    header ("location: lerReservasMesas.php");
?>

