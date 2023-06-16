<?php
    require("../connectdb.php");
    $id = $_POST['id_espaco'];
    $image = $_FILES['image'];
    global $conteudo;
     $arquivo = $image;
        if($arquivo['error'] == 0) {
            // Abre o arquivo em modo binário
            $handle = fopen($arquivo['tmp_name'], 'rb');

            // Converte o arquivo em um formato adequado para salvar no banco de dados
            $conteudo = fread($handle, filesize($arquivo['tmp_name']));

            // Fecha o arquivo
            fclose($handle);
        }
        $data = [
            "id_espaco"=>$id,
            "foto_espaco"=>$conteudo
        ];
        

    $query = "UPDATE espacos SET id_espaco=:id_espaco,foto_espaco=:foto_espaco where id_espaco=:id_espaco";
    $atualizar = $conn->prepare($query);
    $atualizar->execute($data);

    header("location: lerespacos.php");