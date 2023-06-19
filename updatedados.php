<?php
require("./adm/connectdb.php");
    $id = $_POST['id_cliente'];
    $nome = $_POST['nome_cliente'];
    $sexo = $_POST['sexo_cliente'];
    $email = $_POST['email_cliente'];
    $senha = $_POST['senha_cliente'];
    $telefone = $_POST['telefone_cliente'];

    $query = "UPDATE cliente SET nome_cliente='$nome', sexo_cliente='$sexo', email_cliente='$email', senha_cliente='$senha', telefone_cliente='$telefone' where id_cliente = '$id'; ";
    $atualizar = $conn->query($query);

    session_start();
    session_destroy();
    echo"<script>
            alert('Dados alterados com sucesso! Você deve fazer login novamente para confirmar a alteração');
            window.location.href='login.php';
        </script>"
?>