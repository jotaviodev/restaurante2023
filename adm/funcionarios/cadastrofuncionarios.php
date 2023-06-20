<?php
require("../validationlogadm.php");
?>
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
            <form action="insertfuncionarios.php" method="POST">
                <label for="nomeDoAdm">Nome completo: </label>
                <input type="text" name="nomeDoAdm">
                <label for="cpfDoAdm">CPF: </label>
                <input type="text" name="cpfDoAdm">
                <label for="sexoDoAdm">Sexo: </label>
                <select name="sexoDoAdm">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="U">Prefiro não dizer</option>
                </select>
                <label for="cargoDoAdm">Cargo: </label>
                <select name="cargoDoAdm">
                    <option value="atendente">Atendente</option>
                    <option value="auxiliarDeCozinha">Auxiliar de Cozinha</option>
                    <option value="cozinheiro">Cozinheiro</option>
                    <option value="faxineiro">Faxineiro</option>
                    <option value="garçom">Garçom</option>
                    <option value="gerente">Gerente</option>
                </select>
                <label for="salarioDoAdm">Salário: </label>
                <input type="text" name="salarioDoAdm">
                <label for="emailDoAdm">Email: </label>
                <input type="text" name="emailDoAdm">
                <label for="senhaDoAdm">Senha: </label>
                <input type="password" name="senhaDoAdm">
                <label for="telefoneDoAdm">Telefone: </label>
                <input type="number" name="telefoneDoAdm"> 
                <label for="fotoDoAdm">URL da Foto: </label>
                <input type="text" name="fotoDoAdm">
                <div class="enviar">
                    <input type="submit" value="enviar">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>