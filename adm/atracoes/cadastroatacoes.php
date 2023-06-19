<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Adms</title>
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
            <h1>Inserir</h1>
        </div>
        <div class="form">
            <form action="insertatracao.php" method="POST">
                <label for="nomeAtracao">Nome da Atração: </label>
                <input type="text" name="nomeAtracao" id="nomeAtracao">
                <label for="dataAtracao">Data: </label>
                <input type="date" name="dataAtracao" id="dataAtracao">
                <label for="horarioAtracao">Horário: </label>
                <input type="time" name="horarioAtracao" id="horarioAtracao">
                <label for="descAtracao">Descrição Da Atração: </label>
                <input type="text" name="descAtracao" id="descAtracao">
                <div class="enviar">
                    <input type="submit" value="enviar">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../../scripts/cadastroatracoes.js"></script>
</body>
</html>