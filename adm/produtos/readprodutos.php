<?php
require("../connectdb.php");
    $read = $conn->query('SELECT * FROM produtos ORDER BY id_produto asc');
    $read->execute();
    $data = $read->fetchAll();  
    
?>       