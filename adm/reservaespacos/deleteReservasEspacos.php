<?php
    require("../connectdb.php");
    $id = $_GET['id'];

    $query = "DELETE FROM reservaespaco where id_reservaespaco = '$id' ";
    $deletar = $conn->query($query);
    $deletar->execute();


    header ("location: lerReservasEspacos.php");
?>

