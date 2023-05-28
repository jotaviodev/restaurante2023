<?php
require("connectdb.php");
    $read = $conn->query('SELECT * FROM mesas ORDER BY id_mesa asc');
    $read->execute();
    $data = $read->fetchAll(); 
?>       