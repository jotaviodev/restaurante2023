<?php
    require("../connectdb.php");
    $id = $_GET['id'];

    $query = "DELETE FROM produtos where id_produto = '$id' ";
    $deletar = $conn->query($query);
    $deletar->execute();

    header ("location: lerprodutos.php");
?>

