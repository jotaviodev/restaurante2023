<?php
    require('../connectdb.php');
    $nomeMesa = $_POST['nomeMesa'];
    $precoMesa = $_POST['precoMesa'];
    $capacidadeMesa = $_POST['capacidadeMesa'];
    $descMesa = $_POST['descMesa'];
    $fotoMesa = $_FILES['fotoMesa'];

    global $conteudo;
     $arquivo = $fotoMesa;
        if($arquivo['error'] == 0) {
            // Abre o arquivo em modo binário
            $handle = fopen($arquivo['tmp_name'], 'rb');

            // Converte o arquivo em um formato adequado para salvar no banco de dados
            $conteudo = fread($handle, filesize($arquivo['tmp_name']));

            // Fecha o arquivo
            fclose($handle);
        }
        $data = [
            "id_mesa"=>0,
            "nome_mesa"=>$nomeMesa,
            "preco_mesa"=>$precoMesa,
            "capacidade_mesa"=>$capacidadeMesa,
            "descricao_mesa"=>$descMesa,
            "foto_mesa"=>$conteudo
        ];
    $query = "INSERT INTO mesas (id_mesa,nome_mesa,preco_mesa,capacidade_mesa,descricao_mesa,foto_mesa)VALUES (:id_mesa,:nome_mesa,:preco_mesa,:capacidade_mesa,:descricao_mesa,:foto_mesa)";

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