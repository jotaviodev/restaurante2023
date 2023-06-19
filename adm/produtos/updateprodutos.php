<?php
    require("../connectdb.php");
    $id = $_POST['idDoProduto'];
    $nomeDoProduto = $_POST['nomeDoProduto'];
    $ingredientesDoProduto = $_POST['ingredientesDoProduto'];
    $precoDoProduto = (double)str_replace(",",".",$_POST['precoDoProduto']);
    $tipoDoAlimento = $_POST['tipoDeAlimento'];
        $data = [
            "id_produto"=>$id,
            "nome_produto"=>$nomeDoProduto,
            "ingredientes_produto"=>$ingredientesDoProduto,
            "preco_produto"=>$precoDoProduto,
            "tipo_produto"=>$tipoDoAlimento,
        ];
        

    $query = "UPDATE produtos  SET id_produto=:id_produto, nome_produto= :nome_produto, ingredientes_produto=:ingredientes_produto, preco_produto = :preco_produto, tipo_produto=:tipo_produto where id_produto=:id_produto";
    $atualizar = $conn->prepare($query);
    $atualizar->execute($data);

    header("location: lerprodutos.php");
?>