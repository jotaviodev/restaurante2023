<?php
    require("./adm/validationlog.php"); 
    require("./adm/connectdb.php");
    $read = $conn->query('SELECT * FROM reservamesa ORDER BY id_reservamesa asc');
    $read->execute();
    $data = $read->fetchAll(); 
    if(isset($_POST['data_reservamesa'])){
        if(!$_SESSION){
            session_start();
        }
        if(!$_SESSION){
            session_start();
        }
        require("./adm/login.php");
        require('./adm/connectdb.php');
            $id_mesa = $_GET['id'];
            $id_clientereserva = $_SESSION['id'];
            $data_reservamesa = $_POST['data_reservamesa'];

            $dataatual = date('Y/m/d');
            $anoRecebidoPeloInput = explode('-',$data_reservamesa);
            
            
            $horario_reserva = $_POST['horario_reserva'];
            $insertflag = true;
            
            if(strtotime($dataatual) <= strtotime($data_reservamesa) && strcmp(date('Y'),$anoRecebidoPeloInput[0]) == 0){
                foreach($data as $consulta){
                    if($consulta[3] == $data_reservamesa && $consulta[4] == $horario_reserva){
                        $insertflag = false;
                        break;
                    }
                } 
                if($insertflag == false){
                    echo "<script>alert('Horário já reservado!')</script>";
                }else{
                    $query = "INSERT INTO reservamesa VALUES (0,'$id_clientereserva','$id_mesa','$data_reservamesa','$horario_reserva')";
                        $inserir = $conn->prepare($query);
                        $inserir->execute();
                        if ($inserir) {
                        echo "<script>alert('Reserva concluída com sucesso!')</script>";
                        }
                }
            }else{
                echo "<script>alert('Data inválida! As reservas são referentes apenas ao ano atual.')</script>";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produtos</title>
    <link rel="stylesheet" href="./styles/reservasdemesas.css">
</head>
<body>
    <div class="main-menu">
        <nav>
            <ul>
                <a href="../index.html"><img src="./imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
                <li><a href="../index.html">Início</a></li>
                <li><a href="../about.html">Sobre nós</a></li>
                <li><a href="../cardápio.html">Nosso Cardápio</a></li>
                <li><a href="../reservas.html">Reservas</a></li>
                <li><a href="../atrações.html">Atrações</a></li>
                <li><a href="../locais.html">Instalações Físicas</a></li>
                <li><a href="./perfil.php">Perfil</a></li> 
            </ul>
        </nav>
    </div>
    <div class="pag1">
        <div class="box">
            <div class="titulo">
                <h1>Reservar</h1>
            </div>
            <div class="form">
                <form action='' method="POST">
                    <label for="data_reservamesa">Data: </label>
                    <input type="date" name="data_reservamesa" id="data_reservamesa">
                    <label for="horario_reserva">Horario: </label>
                    <select name="horario_reserva" id="">
                        <option value="11a12">11:00-12:00</option>
                        <option value="12a13">12:00-13:00</option>
                        <option value="13a14">13:00-14:00</option>
                        <option value="14a15">14:00-15:00</option>
                        <option value="15a16">15:00-16:00</option>
                        <option value="16a17">16:00-17:00</option>
                        <option value="17a18">17:00-18:00</option>
                        <option value="18a19">18:00-19:00</option>
                        <option value="19a20">19:00-20:00</option>
                        <option value="20a21">20:00-21:00</option>
                        <option value="21a22">21:00-22:00</option>
                    </select>
                    <div class="enviar">
                        <input type="submit" value="enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../scripts/cadastroprodutos.js"></script>
</body>
</html>