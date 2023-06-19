<?php
require("connectdb.php");
    $read = $conn->query('SELECT * FROM espacos ORDER BY id_espaco asc');
    $read->execute();
    $dados =$read->fetchAll();
    $data = [];
    foreach($dados as $d){
        if(ctype_xdigit(bin2hex($d['foto_espaco']))){
            $base64image = base64_encode($d['foto_espaco']);
            $d['foto_espaco'] = $base64image;
        }
        $data[] = [
            "id_espaco"=>$d['id_espaco'],
            "nome_espaco"=>$d['nome_espaco'],
            "preco_espaco"=>$d['preco_espaco'],
            "descricao_espaco"=>$d['descricao_espaco'],
            "foto_espaco"=>$d['foto_espaco'], 
        ];

    }
?>       