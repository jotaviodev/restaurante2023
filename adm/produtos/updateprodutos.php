<?php
    require("../connectdb.php");
    $id = $_POST['idDoProduto'];
    $nomeDoProduto = $_POST['nomeDoProduto'];
    $ingredientesDoProduto = $_POST['ingredientesDoProduto'];
    $precoDoProduto = (double)str_replace(",",".",$_POST['precoDoProduto']);
    $tipoDoAlimento = $_POST['tipoDeAlimento'];
    $fotoProduto = $_POST['fotoProduto'];

    $query = "UPDATE produtos SET nome_produto='$nomeDoProduto', ingredientes_produto='$ingredientesDoProduto', preco_produto='$precoDoProduto', tipo_produto='$tipoDoAlimento', foto_produto ='$fotoProduto' where id_produto = '$id' ";
    $atualizar = $conn->query($query);

    header("location: lerprodutos.php");
?>