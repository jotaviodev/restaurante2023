<?php
    require('./adm/connectdb.php');
    if(isset($_POST['email']) || isset($_POST['Senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $query = "SELECT * FROM cliente WHERE email_cliente = '$email' and senha_cliente = '$senha'";
        $userData = $conn->query($query);
        $userData->execute();
        $quantidade = $userData->fetchColumn();
        if($quantidade == 0){
            echo "<script>alert('Email ou Senha incorretos')</script>";
        }else if($quantidade == 1){
            $userData->execute();
            $userData =  $userData->fetchAll();
                if(!isset($_SESSION)){
                    session_start();
                }
            $_SESSION['id'] = $userData[0][0];
            $_SESSION['nome'] = $userData[0][1];
            $_SESSION['sexo'] = $userData[0][2];
            $_SESSION['email'] = $userData[0][3];
            $_SESSION['senha'] = $userData[0][4];
            $_SESSION['telefone'] = $userData[0][5];
            $_SESSION['foto'] = $userData[0][6];
            
           header("location: index.html");
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login/Cadastro</title>
    <link rel="stylesheet" href="styles/loginpage.css">
</head>
<body>
    <div class="main-menu">
        <nav>
            <ul>
                <div class="menu">
                    <a href="./index.html"><img src="imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
                </div>
                <li><a href="./index.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Início</a></li>
                <li><a href="./about.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Sobre nós</a></li>
                <li><a href="./cardápio.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Nosso Cardápio</a></li>
                <li><a href="./reservas.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Reservas</a></li>
                <li><a href="./atrações.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Atrações</a></li>
                <li><a href="./locais.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Instalações Físicas</a></li>
                <li><a href="./perfil.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Perfil</a></li> 
            </ul>
        </nav>
    </div>
    <div class="pag1">
    <div class="form">
        <h3>Login</h3>
        <form action="" style="width: 50vh; height: 50vh;" method="POST">
            <div class="email">
                <label for="email">email: </label>
                <input type="email" name="email" id="email"style="height: 5vh; width: 100%;"><br>
            </div>
            <div class="senha">
                <label for="senha">Senha: </label>
                <input type="password" style="height: 5vh; width: 100%;" name="senha"><br>
            </div>
            <a href="./cadastrousuarios.html">Não sou cadastrado</a><br>
            <div class="enviar">
            <input type="submit" value="Login"style="cursor: pointer;"></form>
            </div>
        </form>
    </div>
</body>
</html>