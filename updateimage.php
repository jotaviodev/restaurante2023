<?php
    require("./adm/connectdb.php");
    $id = $_POST['id_cliente'];
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
            "id_cliente"=>$id,
            "foto_cliente"=>$conteudo
        ];
        

    $query = "UPDATE cliente SET id_cliente=:id_cliente,foto_cliente=:foto_cliente where id_cliente=:id_cliente";
    $atualizar = $conn->prepare($query);
    $atualizar->execute($data);

    session_start();
    session_destroy();
    echo"<script>
            alert('Dados alterados com sucesso! Você deve fazer login novamente para confirmar a alteração');
            window.location.href='login.php';
        </script>";
    ?>