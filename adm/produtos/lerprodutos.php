<?php
require('./readprodutos.php');
require("../validationlogadm.php");
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
    <style>
        img{
            width: 50px;
            height:50px;
        }
    </style>
</head>
<body>
<div class="main-menu">
        <nav>
            <ul>
                <div class="menu">
                    <a href="../indexadm.php"><img src="../../imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
                </div>
                <li><a href="../indexprodutos.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Cardápio</a></li>
                <li><a href="../mesasEspacos.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Mesas e espaços</a></li>
                <li><a href="../reservas.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Reservas</a></li>
                <li><a href="../admatracoes.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Atrações</a></li>
                <li><a href="../admusuarios.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Usuários</a></li>

            </ul>
        </nav>
    </div> 
    <div class="pag1">
    <div class="m-5">
        <table class="table bg-info-subtle">
            <thead>
              <tr>
                <th scope="col">id_produto</th>
                <th scope="col">nome_produto</th>
                <th scope="col">ingredientes_produto</th>
                <th scope="col">preco_produto</th>
                <th scope="col">tipo_produto</th>
                <th scope="col">foto_produto</th>
                <th scope="col">...</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $contador = 0;  
                    while($contador < count($data)){
                        echo "<tr>";
                        echo "<td>".$data[$contador]['id_produto']."</td>";
                        echo "<td>".$data[$contador]['nome_produto']."</td>";
                        echo "<td>".$data[$contador]['ingredientes_produto']."</td>";
                        echo "<td>".$data[$contador]['preco_produto']."</td>";
                        echo "<td>".$data[$contador]['tipo_produto']."</td>";
                        echo "<td><img src='data:image/jpeg;base64,".$data[$contador]['foto_produto']."'><a href='alterimage.php?id=".$data[$contador]['id_produto']."'> Alterar</a></td>";
                        echo "<td>".
                            "<a class='btn btn-sm btn-primary' href='atualizarprodutos.php?id=".$data[$contador]['id_produto']."'>".
                            "<svg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>".
                            "<path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>".
                            "</svg>".
                            "</a>".
                            "<button class='btn btn-sm btn-danger' onclick='confirmDelete(".$data[$contador]['id_produto'].")'>".
                                "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>".
                                "<path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>".
                                "</svg>".
                            "</button>".
                        "</td>";
                        $contador++;
                    }
                ?>
            </tbody>
          </table>
    </div>
    </div>
    <script>
        function confirmDelete(id){
            let confirmation = confirm('Você realmente deseja deletar este item?');
            if(confirmation){
                window.location.href="./deleteprodutos.php?id=" + id
            }
        }
    </script>
</body>
</html>
