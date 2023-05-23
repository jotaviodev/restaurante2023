<?php
    require("../connectdb.php");
    $id = $_POST['id_atracao'];
    $nome_atracao = $_POST['nome_atracao'];
    $data_atracao = $_POST['data_atracao'];
    $descricao_atracao = $_POST['descricao_atracao'];

    $query = "UPDATE atracoes SET nome_atracao='$nome_atracao', data_atracao='$data_atracao', descricao_atracao='$descricao_atracao' where id_atracao = '$id' ";
    $atualizar = $conn->query($query);

    header("location: leratracoes.php");
?>