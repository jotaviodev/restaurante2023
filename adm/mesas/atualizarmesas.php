<?php
require("../validationlogadm.php");
require("../connectdb.php");
    $id = $_GET['id'];
    $read = $conn->query("SELECT * FROM mesas where id_mesa ='$id'");
    $read->execute();
    $data = $read->fetchAll(); 
?>       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro atracoes</title>
    <link rel="stylesheet" href="../stylesadm/cadastroatracoes.css">
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
                <h1>Atualizar</h1>
            </div>
            <div class="form">
                <form action="updatemesas.php" method="POST">
                    <label for="id_mesa">ID: </label>
                    <input type="text" name="id_mesa" value="<?php echo($id)?>" readonly>
                    <label for="nome_mesa">Nome: </label>
                    <input type="text" name="nome_mesa" id="nomeMesa" value="<?php echo($data[0]['nome_mesa'])?>">
                    <label for="data_mesa">Preço(R$/h): </label>
                    <input type="text" name="preco_mesa" id="precoMesa" value="<?php echo($data[0]['preco_mesa'])?>">
                    <label for="capacidade_mesa">Capacidade: </label>
                    <input type="text" name="capacidade_mesa" id="capacidadeMesa" value="<?php echo($data[0]['capacidade_mesa'])?>">
                    <label for="descricao_mesa">Descrição: </label>
                    <input type="text" name="descricao_mesa" id="descMesa" value="<?php echo($data[0]['descricao_mesa'])?>">
                    <div class="enviar">
                        <input type="submit" value="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../scripts/cadastromesas.js"></script>
</body>
</html>