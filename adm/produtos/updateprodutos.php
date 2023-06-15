<?php
    require("../connectdb.php");
    $id = $_POST['idDoProduto'];
    $nomeDoProduto = $_POST['nomeDoProduto'];
    $ingredientesDoProduto = $_POST['ingredientesDoProduto'];
    $precoDoProduto = (double)str_replace(",",".",$_POST['precoDoProduto']);
    $tipoDoAlimento = $_POST['tipoDeAlimento'];
    global $conteudo;
     $arquivo = $fotoProduto;
        if($arquivo['error'] == 0) {
            // Abre o arquivo em modo binário
            $handle = fopen($arquivo['tmp_name'], 'rb');

            // Converte o arquivo em um formato adequado para salvar no banco de dados
            $conteudo = fread($handle, filesize($arquivo['tmp_name']));

            // Fecha o arquivo
            fclose($handle);
        }
        $data = [
            "id_produto"=>$id,
            "nome_produto"=>$nomeDoProduto,
            "ingredientes_produto"=>$ingredientesDoProduto,
            "preco_produto"=>$precoDoProduto,
            "tipo_produto"=>$tipoDoAlimento,
            "foto_produto"=>$conteudo
        ];
        

    $query = "UPDATE produtos  SET id_produto=:id_produto, nome_produto= :nome_produto, ingredientes_produto=:ingredientes_produto, preco_produto = :preco_produto, tipo_produto=:tipo_produto where id_produto=:id_produto";
    $atualizar = $conn->prepare($query);
    $atualizar->execute($data);

    header("location: lerprodutos.php");
?>