<?php
require("./adm/validationlog.php");
require("./adm/connectdb.php");
$id = $_GET['id'];
$query = "SELECT * FROM reservamesa WHERE id_clientereserva = '$id'";
$query = $conn->query($query);
$query->execute();
$dados = $query->fetchAll();

$query2 = "SELECT * FROM reservaespaco WHERE id_clientereserva = '$id'";
$query2 = $conn->query($query2);
$query2->execute();
$dados2 = $query2->fetchAll();

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
</head>
<body>
<div class="main-menu">
        <nav>
            <ul>
                <div class="menu">
                    <a href="./index.php"><img src="imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
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
        <h1>Reservas de espaços</h1>
    <div class="m-5">
        <table class="table bg-info-subtle">
            <thead>
              <tr>
                <th scope="col">id_reservamesa</th>
                <th scope="col">id_clientereserva </th>
                <th scope="col">id_mesa</th>
                <th scope="col">data_reservamesa</th>
                <th scope="col">horario_reserva</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $contador = 0;  
                    while($contador < $query->rowCount()){
                        echo "<tr>";
                        echo "<td>".$dados[$contador]['id_reservamesa']."</td>";
                        echo "<td>".$dados[$contador]['id_clientereserva']."</td>";
                        echo "<td>".$dados[$contador]['id_mesa']."</td>";
                        echo "<td>".$dados[$contador]['data_reservamesa']."</td>";
                        echo "<td>".$dados[$contador]['horario_reserva']."</td>";                        
                        "</td>";
                        $contador++;
                    }
                ?>
            </tbody>
          </table>
    </div>
    </div>
    <div class="pag2">
        <h1>Reservas de mesas</h1>
    <div class="m-5">
        <table class="table bg-info-subtle">
            <thead>
              <tr>
                <th scope="col">id_reservaespaco</th>
                <th scope="col">id_clientereserva </th>
                <th scope="col">id_espaco</th>
                <th scope="col">data_reservaespaco</th>
                <th scope="col">horario_reserva</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $contador2 = 0;  
                    while($contador2 < $query2->rowCount()){
                        echo "<tr>";
                        echo "<td>".$dados2[$contador2]['id_reservaespaco']."</td>";
                        echo "<td>".$dados2[$contador2]['id_clientereserva']."</td>";
                        echo "<td>".$dados2[$contador2]['id_espaco']."</td>";
                        echo "<td>".$dados2[$contador2]['data_reservaespaco']."</td>";
                        echo "<td>".$dados2[$contador2]['horario_reserva']."</td>";                        
                        "</td>";
                        $contador2++;
                    }
                ?>
            </tbody>
          </table>
    </div>
    </div>
    
</body>
</html>
