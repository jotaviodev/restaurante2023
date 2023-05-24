<?php
    require("../connectdb.php");
    $id = $_POST['id_mesa'];
    $nome_mesa = $_POST['nome_mesa'];
    $preco_mesa = $_POST['preco_mesa'];
    $capacidade_mesa = $_POST['capacidade_mesa'];
    $descricao_mesa = $_POST['descricao_mesa'];

    $query = "UPDATE mesas SET nome_mesa='$nome_mesa', preco_mesa='$preco_mesa', capacidade_mesa='$capacidade_mesa', descricao_mesa='$descricao_mesa' where id_mesa = '$id' ";
    $atualizar = $conn->query($query);

    header("location: lermesas.php");
?>