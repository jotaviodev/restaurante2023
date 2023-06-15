<?php
    require("../connectdb.php");
    $id = $_POST['id_mesa'];
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
            "id_mesa"=>$id,
            "foto_mesa"=>$conteudo
        ];
        

    $query = "UPDATE mesas SET id_mesa=:id_mesa,foto_mesa=:foto_mesa where id_mesa=:id_mesa";
    $atualizar = $conn->prepare($query);
    $atualizar->execute($data);

    header("location: lermesas.php");