<?php
    require("../connectdb.php");
    $id = $_GET['id'];

    $query = "DELETE FROM funcionarios where id_funcionario = '$id' ";
    $deletar = $conn->query($query);
    $deletar->execute();


    header ("location: lerfuncionarios.php");
?>

