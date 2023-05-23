<?php
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
                <form action="updateatracoes.php" method="POST">
                    <label for="id_atracao">ID: </label>
                    <input type="text" name="id_atracao" value="<?php echo($id)?>" readonly>
                    <label for="nome_atracao">Nome: </label>
                    <input type="text" name="nome_atracao" value="<?php echo($data[0]['nome_atracao'])?>">
                    <label for="data_atracao">Data: </label>
                    <input type="date" name="data_atracao" value="<?php echo($data[0]['data_atracao'])?>">
                    <label for="descricao_atracao">Descrição: </label>
                    <input type="text" name="descricao_atracao" value="<?php echo($data[0]['preco_atracao'])?>">
                    <div class="enviar">
                        <input type="submit" value="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>