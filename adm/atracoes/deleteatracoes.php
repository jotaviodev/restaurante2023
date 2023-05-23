<?php
    require("../connectdb.php");
    $id = $_GET['id'];

    $query = "DELETE FROM atracoes where id_atracao = '$id' ";
    $deletar = $conn->query($query);
    $deletar->execute();

    header ("location: leratracoes.php");
?>

