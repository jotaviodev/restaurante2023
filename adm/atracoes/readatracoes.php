<?php
require("../connectdb.php");
    $read = $conn->query('SELECT * FROM atracoes ORDER BY id_atracao asc');
    $read->execute();
    $data = $read->fetchAll(); 
            
?>       