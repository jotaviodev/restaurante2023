<?php
    require("../connectdb.php");
    $id = $_POST['id_cliente'];
    $nome_cliente = $_POST['nome_cliente'];
    $sexo_cliente = $_POST['sexo_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $senha_cliente = $_POST['senha_cliente'];
    $telefone_cliente = $_POST['telefone_cliente'];

    $query = "UPDATE cliente SET nome_cliente='$nome_cliente', sexo_cliente='$sexo_cliente', email_cliente='$email_cliente', senha_cliente='$senha_cliente', telefone_cliente='$telefone_cliente' where id_cliente = '$id'; ";
    $atualizar = $conn->query($query);

    header("location: lerclientes.php");
?>