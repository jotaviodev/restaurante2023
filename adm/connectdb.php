<?php
    $username="root";
    $database="restaurante";
    $password = "";
    $host = "localhost";
try {
  $conn = new PDO('mysql:host=localhost;dbname=restaurante', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>