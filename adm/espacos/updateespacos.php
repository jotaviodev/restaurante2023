<?php
    require("../connectdb.php");
    $id = $_POST['id_espaco'];
    $nome_espaco = $_POST['nome_espaco'];
    $preco_espaco = $_POST['preco_espaco'];
    $descricao_espaco = $_POST['descricao_espaco'];
    $foto_espaco = $_POST['foto_espaco'];

    $query = "UPDATE espacos SET nome_espaco='$nome_espaco', preco_espaco='$preco_espaco', foto_espaco='$foto_espaco', descricao_espaco='$descricao_espaco' where id_espaco = '$id' ";
    $atualizar = $conn->query($query);

    header("location: lerespacos.php");
?>