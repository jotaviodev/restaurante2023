<?php
require("../connectdb.php");
    $read = $conn->query('SELECT * FROM reservaespaco ORDER BY id_reservaespaco asc');
    $read->execute();
    $data = $read->fetchAll(); 
            
?>       