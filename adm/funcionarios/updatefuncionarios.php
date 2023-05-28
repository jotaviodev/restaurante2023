<?php
    require("../connectdb.php");
    $id = $_POST['id_funcionario'];
    $nome_funcionario = $_POST['nome_funcionario'];
    $cpf_funcionario = $_POST['cpf_funcionario'];
    $sexo_funcionario = $_POST['sexo_funcionario'];
    $cargo_funcionario = $_POST['cargo_funcionario'];
    $email_funcionario = $_POST['email_funcionario'];
    $senha_funcionario = $_POST['senha_funcionario'];
    $telefone_funcionario = $_POST['telefone_funcionario'];
    $foto_funcionario = $_POST['foto_funcionario'];
    $salario_funcionario = $_POST['salario_funcionario'];

    $query = "UPDATE funcionarios SET nome_funcionario='$nome_funcionario', cpf_funcionario='$cpf_funcionario', sexo_funcionario='$sexo_funcionario', cargo_funcionario='$cargo_funcionario', email_funcionario='$email_funcionario', senha_funcionario='$senha_funcionario', telefone_funcionario='$telefone_funcionario', foto_funcionario='$foto_funcionario', salario_funcionario='$salario_funcionario' where id_funcionario = '$id'; ";
    $atualizar = $conn->query($query);

    header("location: lerfuncionarios.php");
?>