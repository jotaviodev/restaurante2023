<?php
require("../validationlogadm.php");
require("../connectdb.php");
    $id = $_GET['id'];
    $read = $conn->query("SELECT * FROM atracoes where id_atracao ='$id'");
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
                <form action="updateatracoes.php" method="POST">
                    <label for="id_atracao">ID: </label>
                    <input type="text" name="id_atracao" id="id_atracao" value="<?php echo($id)?>" readonly>
                    <label for="nome_atracao">Nome: </label>
                    <input type="text" name="nome_atracao" id="nome_atracao" value="<?php echo($data[0]['nome_atracao'])?>">
                    <label for="data_atracao">Data: </label>
                    <input type="date" name="data_atracao" id="data_atracao" value="<?php echo($data[0]['data_atracao'])?>">
                    <label for="horario_atracao">Horário: </label>
                    <input type="time" name="horario_atracao" id="horario_atracao" value="<?php echo($data[0]['horario_atracao'])?>">
                    <label for="data_atracao">Data: </label>
                    <input type="text" name="descricao_atracao" id="descricao_atracao" value="<?php echo($data[0]['descricao_atracao'])?>">
                    <div class="enviar">
                        <input type="submit" value="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../scripts/cadastroatracoes.js"></script>
</body>
</html>