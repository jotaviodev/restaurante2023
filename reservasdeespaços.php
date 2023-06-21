<?php
    require("./adm/readForEspacos.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas de Mesa</title>
    <link rel="stylesheet" href="styles/reservasdeespaços.css">
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
        <?php
            for ($i = 0; $i < count($data); $i++) {
                echo "<div class='container-table'>".
                        "<div class='image-table'>".
                        "<img src='data:image/jpeg;base64,".$data[$i]['foto_espaco']."'>".
                        "</div>".
                        "<div class='table-data'>".
                        "<h1>Espaco: ".$data[$i]['nome_espaco']."</h1>".
                        "<h3>Preço: ".$data[$i]['preco_espaco']." R$/h</h3>".
                        "<h3>Descrição: ".$data[$i]['descricao_espaco']."</h3>".
                        "</div>".
                        "<a href='./formreservadeespacos.php?id=".$data[$i]['id_espaco']."'><button>Reservar</button></a>". 
                    "</div>";
            }
        ?>
    </div>
   <script src="./scripts/funcoesglobais.js"></script>
</body>
</html>