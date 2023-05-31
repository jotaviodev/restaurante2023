<?php
require("../connectdb.php");
    $nomeDoProduto = $_POST['nomeDoProduto'];
    $ingredientesDoProduto = $_POST['ingredientesDoProduto'];
    $precoDoProduto = (double)str_replace(",",".",$_POST['precoDoProduto']);
    $tipoDoAlimento = $_POST['tipoDeAlimento'];
    $fotoProduto = $_FILES['fotoProduto'];

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
            "id_produto"=>0,
            "nome_produto"=>$nomeDoProduto,
            "ingredientes_produto"=>$ingredientesDoProduto,
            "preco_produto"=>$precoDoProduto,
            "tipo_produto"=>$tipoDoAlimento,
            "foto_produto"=>$conteudo
        ];
    $query = "INSERT INTO produtos (id_produto,nome_produto,ingredientes_produto,preco_produto,tipo_produto,foto_produto)VALUES (:id_produto,:nome_produto,:ingredientes_produto,:preco_produto,:tipo_produto,:foto_produto)";
        
// Executa a query
$inserir = $conn->prepare($query);
$inserir->execute($data);

if ($inserir) {
echo "Notícia inserida com sucesso!";
} else {
echo "Não foi possível inserir a notícia, tente novamente.";
// Exibe dados sobre o erro:
echo "Dados sobre o erro:" . mysql_error();
}
?>