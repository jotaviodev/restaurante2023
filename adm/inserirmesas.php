<?php
    require("./validationlogadm.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserir mesa</title>
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
        <form action=""> 
            <h1>Cadastrar mesa</h1>
            <div class="topform">                                  
                <div class="leftform">
                    <div class="divnome">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome">
                    </div>
                    <div class="">
                    <label for="">Preço: </label>
                    <input type="number" name="">
                    </div>
                </div>
                <div class="">
                    <label for="">Horário: </label>
                    <input type="time" name="">
                    </div>                    <div class="">
                        <label for="">Data: </label>
                        <input type="date" name="">
                        </div>                    <div class="">
                    <label for="">Capacidade: </label>
                    <input type="number" name="">
                    </div>                    <div class="">
                        <label for="">Descrição: </label>
                        <input type="text" name="">
                        </div>
                        <div class="">
                            <label for="">Foto: </label>
                            <input type="file" name="">
                            </div>
            <div class="bottomform">
                    <input type="submit" name="enviar" id="enviar">
            </div>
        </form>
        </div>
        </div>
    </div>
</body>
</html>