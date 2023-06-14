<?php
    require('../connectdb.php');
    $nomeEspaco = $_POST['nomeEspaco'];
    $precoEspaco =(double)str_replace(",",".",$_POST['precoEspaco']);
    $descEspaco = $_POST['descEspaco'];
    $fotoEspaco = $_FILES['fotoEspaco'];

    global $conteudo;
     $arquivo = $fotoEspaco;
        if($arquivo['error'] == 0) {
            // Abre o arquivo em modo binário
            $handle = fopen($arquivo['tmp_name'], 'rb');

            // Converte o arquivo em um formato adequado para salvar no banco de dados
            $conteudo = fread($handle, filesize($arquivo['tmp_name']));

            // Fecha o arquivo
            fclose($handle);
        }
        $data = [
            "id_espaco"=>0,
            "nome_espaco"=>$nomeEspaco,
            "preco_espaco"=>$precoEspaco,
            "descricao_espaco"=>$descEspaco,
            "foto_espaco"=>$conteudo
        ];
    $query = "INSERT INTO espacos (id_espaco,nome_espaco,preco_espaco,descricao_espaco,foto_espaco)VALUES (:id_espaco,:nome_espaco,:preco_espaco,:descricao_espaco,:foto_espaco)";

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