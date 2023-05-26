<?php
require("../connectdb.php");
    $id = $_GET['id'];
    $read = $conn->query("SELECT * FROM cliente where id_cliente ='$id'");
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
                <a href="../index.html"><img src="../../imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
                <li><a href="../index.html">Início</a></li>
                <li><a href="../about.html">Sobre nós</a></li>
                <li><a href="../cardápio.html">Nosso Cardápio</a></li>
                <li><a href="../reservas.html">Reservas</a></li>
                <li><a href="../atrações.html">Atrações</a></li>
                <li><a href="../locais.html">Instalações Físicas</a></li>
                <li><a href="../perfil.html">Perfil</a></li> 
            </ul>
        </nav>
    </div>
    <div class="pag1">
        <div class="box">
            <div class="titulo">
                <h1>Atualizar</h1>
            </div>
            <div class="form">
                <form action="updateclientes.php" method="POST">
                    <label for="id_cliente">ID: </label>
                    <input type="text" name="id_cliente" value="<?php echo($id)?>" readonly>
                    <label for="nome_cliente">Nome: </label>
                    <input type="text" name="nome_cliente" value="<?php echo($data[0]['nome_cliente'])?>">
                    <label for="sexo_cliente">Sexo: </label>
                    <input type="text" name="sexo_cliente" value="<?php echo($data[0]['sexo_cliente'])?>">
                    <label for="email_cliente">Email: </label>
                    <input type="text" name="email_cliente" value="<?php echo($data[0]['email_cliente'])?>">
                    <label for="senha_cliente">Senha: </label>
                    <input type="text" name="senha_cliente" value="<?php echo($data[0]['senha_cliente'])?>">
                    <label for="telefone_cliente">Telefone: </label>
                    <input type="text" name="telefone_cliente" value="<?php echo($data[0]['telefone_cliente'])?>">
                    <label for="foto_cliente">Foto: </label>
                    <input type="text" name="foto_cliente" value="<?php echo($data[0]['foto_cliente'])?>">
                    <div class="enviar">
                        <input type="submit" value="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>