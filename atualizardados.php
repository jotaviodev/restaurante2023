<?php
require("./adm/connectdb.php");
require('./adm/validationlog.php');
$bd_generos = array("M","F","U");
?>       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro atracoes</title>
    <link rel="stylesheet" href="./adm/stylesadm/cadastroatracoes.css">
</head>
<body>
<div class="main-menu">
        <nav>
            <ul>
                <div class="menu">
                    <a href="../indexadm.html"><img src="./imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
                </div>
                <li><a href="../indexprodutos.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Cardápio</a></li>
                <li><a href="../mesasEspacos.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Mesas e espaços</a></li>
                <li><a href="../reservas.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Reservas</a></li>
                <li><a href="../admatracoes.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Atrações</a></li>
                <li><a href="../admusuarios.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Usuários</a></li>

            </ul>
        </nav>
    </div> 
    <div class="pag1">
        <div class="box">
            <div class="titulo">
                <h1>Atualizar</h1>
            </div>
            <div class="form">
                <form action="updatedados.php" method="POST">
                    <label for="id_cliente">ID: </label>
                    <input type="text" name="id_cliente" value="<?php echo $_SESSION['id']?>" readonly>
                    <label for="nome_cliente">Nome: </label>
                    <input type="text" name="nome_cliente" value="<?php echo $_SESSION['nome'] ?>">
                    <label for="sexo_cliente">Sexo: </label>
                    <select name="sexo_cliente">
                    <?php
                        foreach ($bd_generos as $valor) {
                            if ($valor == $_SESSION['sexo'])
                            echo "<option value='".$valor."'>".$valor."</option>";
                        }
                        foreach ($bd_generos as $valor) {
                            if ($valor != $_SESSION['sexo'])
                            echo "<option value='".$valor."'>".$valor."</option>";
                        }
                    ?>
                    </select>
                    <label for="email_cliente">Email: </label>
                    <input type="text" name="email_cliente" value="<?php echo $_SESSION['email']?>">
                    <label for="senha_cliente">Senha: </label>
                    <input type="text" name="senha_cliente" value="<?php echo $_SESSION['senha']?>">
                    <label for="telefone_cliente">Telefone: </label>
                    <input type="text" name="telefone_cliente" value="<?php echo $_SESSION['telefone']?>">
                    <div class="enviar">
                        <input type="submit" value="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>