<?php
require("connectdb.php");
    $read = $conn->query('SELECT * FROM espacos ORDER BY id_espaco asc');
    $read->execute();
    $data = $read->fetchAll(); 
    
?>       