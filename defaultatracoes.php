<?php
require("./adm/validationlog.php");
require("./adm/connectdb.php");
$id = $_GET['id'];
$query = "SELECT * FROM atracoes WHERE id_atracao = '$id'";
$query = $conn->query($query);
$query->execute();
$dados = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./adm/stylesadm/readprodutos.css">
    <style>
        .pag1{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .container{
            width:80vh;
            height:80vh;
            background-color:#6c0202d2;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            border-radius:20px;
        }
        .container h1,h2{
            color:whitesmoke;
            font-size:xx-large;
        }
    </style>
</head>
<body>
<div class="main-menu">
        <nav>
            <ul>
                <div class="menu">
                <a href="./index.php"><img src="imagens/Logos/logobranca1.png" alt="" style="cursor: pointer;"></a>
                </div>
                <li><a href="./index.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Início</a></li>
                <li><a href="./about.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Sobre nós</a></li>
                <li><a href="./cardápio.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Nosso Cardápio</a></li>
                <li><a href="./reservas.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Reservas</a></li>
                <li><a href="./atrações.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Atrações</a></li>
                <li><a href="./locais.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Instalações Físicas</a></li>
                <li><a href="./perfil.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Perfil</a></li> 
            </ul>
        </nav>
    </div>
    <div class="pag1">
        <div class="container">
            <?php 
                echo"<h1>".$dados[0]['nome_atracao']."</h1>";
                echo"<h2>".$dados[0]['descricao_atracao']."</h2>";
            ?>
        </div>
    </div>
    
    <script>
        function confirmDelete1(id){
            let confirmation = confirm('Você realmente deseja cancelar esta reserva?');
            if(confirmation){
                window.location.href="./adm/reservamesas/deleteReservasMesas2.php?id=" + id
            }
        }
        function confirmDelete2(id){
            let confirmation = confirm('Você realmente deseja cancelar esta reserva?');
            if(confirmation){
                window.location.href="./adm/reservaespacos/deleteReservasEspacos2.php?id=" + id
            }
        }
    </script>
    <script src="./scripts/funcoesglobais.js"></script>
</body>
</html>
