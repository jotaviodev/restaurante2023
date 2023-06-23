<?php
    require("../connectdb.php");
    require("../validationlog.php");
    $idUser = $_SESSION['id'];
    $id = $_GET['id'];

    $query = "DELETE FROM reservaespaco where id_reservaespaco = '$id' ";
    $deletar = $conn->query($query);
    $deletar->execute();


    echo "<script>window.location.href='".'../../defaultreservas.php?id='.$idUser."'"."</script>";
?>

