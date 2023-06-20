<?php
    require('./connectdb.php');
    if(isset($_POST['email']) || isset($_POST['Senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $query = "SELECT * FROM funcionarios WHERE email = '$email' and senha = '$senha' and cargo='Gerente'";
        $admData = $conn->query($query);
        $admData->execute();
        $quantidade = $admData->rowCount();
        if($quantidade == 0){
            echo "<script>alert('Email ou Senha incorretos')</script>";
        }else if($quantidade == 1){
            $admData->execute();
            $admData =  $admData->fetchAll();
                if(!isset($_SESSION)){
                    session_start();
                }
            $_SESSION['id_adm'] = $admData[0][0];
            $_SESSION['nome_adm'] = $admData[0][1];
            $_SESSION['cpf_adm'] = $admData[0][2];
            $_SESSION['sexo_adm'] = $admData[0][3];
            $_SESSION['cargo_adm'] = $admData[0][4];
            $_SESSION['email_adm'] = $admData[0][5];
            $_SESSION['senha_adm'] = $admData[0][6];
            $_SESSION['telefone_adm'] = $admData[0][7];
            $_SESSION['foto_adm'] = $admData[0][8];
            $_SESSION['salario_adm'] = $admData[0][9];
            header("location:indexadm.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login/Cadastro</title>
    <link rel="stylesheet" href="stylesadm/loginadm.css">
</head>
<body>
    <div class="pag1">
    <div class="form">
        <h1>Login do Administrador</h1>
        <form action="" style="width: 50vh; height: 50vh;" method="POST">
            <div class="email">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email"style="height: 5vh; width: 100%;"><br>
            </div>
            <div class="senha">
                <label for="senha">Senha: </label>
                <input type="password" style="height: 5vh; width: 100%;" name="senha"><br>
            </div>
            <div class="enviar">
            <input type="submit" value="Login"style="cursor: pointer;"></form>
            </div>
        </form>
    </div>
</body>
</html>