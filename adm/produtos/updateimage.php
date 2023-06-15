<?php
    require("../connectdb.php");
    $id = $_POST['id_produto'];
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
            "id_produto"=>$id,
            "foto_produto"=>$conteudo
        ];
        

    $query = "UPDATE produtos SET id_produto=:id_produto,foto_produto=:foto_produto where id_produto=:id_produto";
    $atualizar = $conn->prepare($query);
    $atualizar->execute($data);
    
    echo"<script>
            alert('imagem alterada com sucesso!')
            window.location.href='lerprodutos.php';
        </script>";