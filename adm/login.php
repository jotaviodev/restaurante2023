<?php
    require('connectdb.php');
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