<?php
require("../validationlogadm.php");
require("../validationlogadm.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Adms</title>
    <link rel="stylesheet" href="../stylesadm/cadastroadms.css">
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
    <div class="box">
        <div class="titulo">
            <h1>Inserir</h1>
        </div>
        <div class="form">
            <form action="insertmesas.php" method="POST" enctype="multipart/form-data">
                <label for="nomeMesa">Nome da Mesa: </label>
                <input type="text" name="nomeMesa" id="nomeMesa">
                <label for="precoMesa">Preço(R$/h): </label>
                <input type="number" name="precoMesa" id="precoMesa">
                <label for="capacidadeMesa">Capacidade da Mesa (Número de pessoas): </label>
                <input type="number" name="capacidadeMesa" id="capacidadeMesa">
                <label for="descMesa">Descrição Da Mesa: </label>
                <input type="text" name="descMesa" id="descMesa">
                <label for="fotoMesa">Foto: </label>
                <input type="file" name="fotoMesa">
                <div class="enviar">
                    <input type="submit" value="enviar">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../../scripts/cadastromesas.js"></script>
</body>
</html>