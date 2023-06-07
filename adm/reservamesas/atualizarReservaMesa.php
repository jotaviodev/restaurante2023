<?php
require("../connectdb.php");
    $id = $_GET['id'];
    $read = $conn->query("SELECT * FROM reservamesa where id_reservamesa ='$id'");
    $read->execute();
    $data = $read->fetchAll(); 

    $bd_horarios = array("11a12","12a13","13a14","14a15","15a16","17a18","18a19","20a21","21a22");
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
                    <a href="../indexadm.html"><img src="../../imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
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
                <form action="updateReservaMesa.php" method="POST">
                    <label for="id_reservamesa">ID da Reserva: </label>
                    <input type="text" name="id_reservamesa" value="<?php echo($id)?>" readonly>
                    <label for="id_clientereserva">ID do cliente: </label>
                    <input type="text" name="id_clientereserva" value="<?php echo($data[0]['id_clientereserva'])?>" readonly>
                    <label for="id_mesa">ID da Mesa: </label>
                    <input type="text" name="id_mesa" value="<?php echo($data[0]['id_mesa'])?>" readonly>
                    <label for="data_reservamesa">Data: </label>
                    <input type="date" name="data_reservamesa" value="<?php echo($data[0]['data_reservamesa'])?>">
                    <label for="horario_reserva">Horário: </label>
                    <select name="horario_reserva">
                    <?php
                        foreach ($bd_horarios as $valor) {
                            if ($valor == $data[0]['horario_reserva'])
                            echo "<option value='".$valor."'>".$valor."</option>";
                        }
                        foreach ($bd_horarios as $valor) {
                            if ($valor != $data[0]['horario_reserva'])
                            echo "<option value='".$valor."'>".$valor."</option>";
                        }
                    ?>
                    </select>
                    <div class="enviar">
                        <input type="submit" value="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>