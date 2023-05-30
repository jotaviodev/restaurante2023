<?php
    require("../connectdb.php");
    $id_reservamesa = $_POST['id_reservamesa'];
    $id_clientereserva = $_POST['id_clientereserva'];
    $id_mesa = $_POST['id_mesa'];
    $data_reservamesa = $_POST['data_reservamesa'];
    $horario_reserva = $_POST['horario_reserva'];

    $query = "UPDATE reservamesa SET  id_clientereserva='$id_clientereserva', data_reservamesa='$data_reservamesa', horario_reserva='$horario_reserva' where id_reservamesa= '$id_reservamesa' ";
    $atualizar = $conn->query($query);

    header("Location: lerReservasMesas.php");
    echo "<script>alert('Alteração concluída com sucesso!')</script>/";
?>