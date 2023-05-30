<?php
    require("../connectdb.php");
    $id_reservaespaco = $_POST['id_reservaespaco'];
    $id_clientereserva = $_POST['id_clientereserva'];
    $id_espaco = $_POST['id_espaco'];
    $data_reservaespaco = $_POST['data_reservaespaco'];
    $horario_reserva = $_POST['horario_reserva'];

    $query = "UPDATE reservaespaco SET  id_clientereserva='$id_clientereserva', data_reservaespaco='$data_reservaespaco', horario_reserva='$horario_reserva' where id_reservaespaco= '$id_reservaespaco' ";
    $atualizar = $conn->query($query);

    header("Location: lerReservasEspacos.php");
    echo "<script>alert('Alteração concluída com sucesso!')</script>/";
?>