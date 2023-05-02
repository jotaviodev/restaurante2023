<?php
require("../connectdb.php");

    $read = $conn->query('SELECT * FROM produtos');
    $row = $read->fetch(PDO::FETCH_OBJ);

    /*while($row = $read->fetch(PDO::FETCH_OBJ)){
    echo $row->id_produto . '<br/>';
    echo $row->nome_produto . '<br />';
    echo $row->ingredientes_produto . '<br />';
    echo $row->preco_produto . '<br />';
    echo $row->tipo_produto . '<br />';
    echo $row->foto_produto . '<br />';
    }*/