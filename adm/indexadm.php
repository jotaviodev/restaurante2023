<?php
    require("./validationlogadm.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial do ADM</title>
    <link rel="stylesheet" href="stylesadm/indexcss.css">
</head>
<body>
    <div class="main-menu">
        <nav>
            <ul>
                <div class="menu">
                    <a href="./indexadm.php"><img src="../imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
                </div>
                <li><a href="./indexprodutos.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Cardápio</a></li>
                <li><a href="./mesasEspacos.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Mesas e espaços</a></li>
                <li><a href="./reservas.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Reservas</a></li>
                <li><a href="./admatracoes.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Atrações</a></li>
                <li><a href="./admusuarios.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Usuários</a></li>

            </ul>
        </nav>
    </div> 
    <div class="pag1">
        <div class="parteesquerda">
            <div class="up">
                <a href="./indexprodutos.php"><button src="" value="" style="font-size: x-large;">Administração de Cardápios</button></a>
            </div>
            <div class="down">
                <a href="mesasEspacos.php"><button src="" value="" style="font-size: x-large;">Administração de Mesas e Espaços</button></a>
            </div>
        </div>
        <div class="partecentral">
            <div class="title">
                <h1>Bem-vindo(a) de volta, administrador(a)</h1>
            </div>
            <div class="down">
                <a href="./reservas.php"><button src="" value="" style="font-size: x-large;">Reservas</button></a>
            </div>
        </div>
        <div class="partedireita">
            <div class="up">
                <a href="admatracoes.php"><button src="" value="" style="font-size: x-large;">Administração de Atrações</button></a>
            </div>
            <div class="down">
                <a href="admusuarios.php"><button src="" value="" style="font-size: x-large;">Administração de Usuários</button></a>
            </div>
        </div>
    </div>
</body>
</html>