<?php
require("../connectdb.php");
    $read = $conn->query('SELECT * FROM produtos ORDER BY id_produto asc');
    $read->execute();
    $dados = $read->fetchAll(); 
    $data = [];
    foreach($dados as $d){
        if(ctype_xdigit(bin2hex($d['foto_produto']))){
            $base64image = base64_encode($d['foto_produto']);
            $d['foto_produto'] = $base64image;
        }
        $data[] = [
            "id_produto"=>$d['id_produto'],
            "nome_produto"=>$d['nome_produto'],
            "ingredientes_produto"=>$d['ingredientes_produto'],
            "preco_produto"=>$d['preco_produto'],
            "tipo_produto"=>$d['tipo_produto'],
            "foto_produto"=>$d['foto_produto'], 
        ];

    }
?>       