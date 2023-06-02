<?php
require("../connectdb.php");
    $read = $conn->query('SELECT * FROM funcionarios ORDER BY id_funcionario asc');
    $read->execute();
    $data = $read->fetchAll(); 


?>       