<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['id'])){
        echo "<script>alert('Você precisa estar logado para completar essa ação')</script>";
        header("location: login.php");
    }
?>