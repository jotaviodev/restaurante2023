<?php
    require("../connectdb.php");    
    $idDoProduto = $_POST['idDoProduto'];

    $query="DELETE FROM produtos WHERE id_produto='$idDoProduto'";    

    $deletar = $conn->prepare($query);
    $deletar->execute();
        if ($deletar) {
            echo "Produto deletado com sucesso!";
            } else {
            echo "Não foi possível deletar o produto, tente novamente.";
            echo "Dados sobre o erro:" . mysql_error();
            }
?>