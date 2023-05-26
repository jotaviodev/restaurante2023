<?php
require("../connectdb.php");
    $read = $conn->query('SELECT * FROM cliente ORDER BY id_cliente asc');
    $read->execute();
    $data = $read->fetchAll(); 
            
?>       