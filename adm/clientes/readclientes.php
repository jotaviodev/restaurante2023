<?php
require("../connectdb.php");
    $read = $conn->query('SELECT * FROM cliente ORDER BY id_cliente asc');
    $read->execute();
    $dados = $read->fetchAll(); 
    $data = [];
    foreach($dados as $d){
        if(ctype_xdigit(bin2hex($d['foto_cliente']))){
            $base64image = base64_encode($d['foto_cliente']);
            $d['foto_cliente'] = $base64image;
        }
        $data[] = [
            "id_cliente"=>$d['id_cliente'],
            "nome_cliente"=>$d['nome_cliente'],
            "sexo_cliente"=>$d['sexo_cliente'],
            "email_cliente"=>$d['email_cliente'],
            "senha_cliente"=>$d['senha_cliente'],
            "telefone_cliente"=>$d['telefone_cliente'],
            "foto_cliente"=>$d['foto_cliente'], 
        ];

    }
?>       