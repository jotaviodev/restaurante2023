<?php
require("../connectdb.php");
    $read = $conn->query('SELECT * FROM mesas ORDER BY id_mesa asc');
    $read->execute();
    $dados = $read->fetchAll(); 
    $data = [];
    foreach($dados as $d){
        if(ctype_xdigit(bin2hex($d['foto_mesa']))){
            $base64image = base64_encode($d['foto_mesa']);
            $d['foto_mesa'] = $base64image;
        }
        $data[] = [
            "id_mesa"=>$d['id_mesa'],
            "nome_mesa"=>$d['nome_mesa'],
            "preco_mesa"=>$d['preco_mesa'],
            "capacidade_mesa"=>$d['capacidade_mesa'],
            "descricao_mesa"=>$d['descricao_mesa'],
            "foto_mesa"=>$d['foto_mesa'], 
        ];

    }
?>       