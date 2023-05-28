<?php
require("../connectdb.php");
    $read = $conn->query('SELECT * FROM reservamesa ORDER BY id_reservamesa asc');
    $read->execute();
    $data = $read->fetchAll(); 
            
?>       