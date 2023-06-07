<?php
require("../connectdb.php");
$id = $_GET['id'];
$query = "SELECT * FROM cliente WHERE id_cliente = '$id'";
$query = $conn->query($query);
$query->execute();
$data = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesadm/readprodutos.css">
</head>
<body>
<div class="main-menu">
        <nav>
            <ul>
                <div class="menu">
                    <a href="../indexadm.html"><img src="../../imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
                </div>
                <li><a href="../indexprodutos.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Cardápio</a></li>
                <li><a href="../mesasEspacos.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Mesas e espaços</a></li>
                <li><a href="../reservas.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Reservas</a></li>
                <li><a href="../admatracoes.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Atrações</a></li>
                <li><a href="../admusuarios.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Usuários</a></li>

            </ul>
        </nav>
    </div> 
    <div class="pag1">
    <div class="m-5">
        <table class="table bg-info-subtle">
            <thead>
              <tr>
                <th scope="col">id_cliente</th>
                <th scope="col">nome_cliente</th>
                <th scope="col">sexo_cliente</th>
                <th scope="col">email_cliente</th>
                <th scope="col">senha_cliente</th>
                <th scope="col">telefone_cliente</th>
                <th scope="col">foto_cliente</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $contador = 0;  
                    while($contador < 1){
                        echo "<tr>";
                        echo "<td>".$data[$contador]['id_cliente']."</td>";
                        echo "<td>".$data[$contador]['nome_cliente']."</td>";
                        echo "<td>".$data[$contador]['sexo_cliente']."</td>";
                        echo "<td>".$data[$contador]['email_cliente']."</td>";
                        echo "<td>".$data[$contador]['senha_cliente']."</td>";
                        echo "<td>".$data[$contador]['telefone_cliente']."</td>";
                        echo "<td>".$data[$contador]['foto_cliente']."</td>";
                        
                        "</td>";
                        $contador++;
                    }
                ?>
            </tbody>
          </table>
    </div>
    </div>
</body>
</html>
