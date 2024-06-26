<?php
require("../validationlogadm.php");
require("../connectdb.php");
    $id = $_GET['id'];
    $read = $conn->query("SELECT * FROM espacos where id_espaco ='$id'");
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
                <form action="updateespacos.php" method="POST">
                    <label for="id_espaco">ID: </label>
                    <input type="text" name="id_espaco" value="<?php echo($id)?>" readonly>
                    <label for="nome_espaco">Nome: </label>
                    <input type="text" name="nome_espaco" id="nome_espaco" value="<?php echo($data[0]['nome_espaco'])?>">
                    <label for="data_espaco">Preço(R$/h): </label>
                    <input type="text" name="preco_espaco" id="preco_espaco"value="<?php echo($data[0]['preco_espaco'])?>">
                    <label for="descricao_espaco">Descrição: </label>
                    <input type="text" name="descricao_espaco" id="descricao_espaco"value="<?php echo($data[0]['descricao_espaco'])?>">
                    <div class="enviar">
                        <input type="submit" value="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../scripts/atualizaespacos.js"></script>
</body>
</html>