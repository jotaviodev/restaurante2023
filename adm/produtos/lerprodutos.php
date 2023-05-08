<?php
require('./readprodutos.php');
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
                <a href="../index.html"><img src="../../imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
                <li><a href="../index.html">Início</a></li>
                <li><a href="../about.html">Sobre nós</a></li>
                <li><a href="../cardápio.html">Nosso Cardápio</a></li>
                <li><a href="../reservas.html">Reservas</a></li>
                <li><a href="../atrações.html">Atrações</a></li>
                <li><a href="../locais.html">Instalações Físicas</a></li>
                <li><a href="../perfil.html">Perfil</a></li> 
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
                        echo "<td>".$data[$contador]['foto_produto']."</td>";
                        echo "<td>"."Ação"."</td>";
                        $contador++;
                    }
                ?>
            </tbody>
          </table>
    </div>
    </div>
</body>
</html>
