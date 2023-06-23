<?php
require("./adm/validationlog.php");
require("./adm/connectdb.php");
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
    <link rel="stylesheet" href="./adm/stylesadm/cadastroatracoes.css">
</head>
<body>
<div class="main-menu">
        <nav>
            <ul>
                <div class="menu">
                <a href="./index.php"><img src="imagens/Logos/logobranca1.png" alt="" style="cursor: pointer;"></a>
                </div>
                <li><a href="./index.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Início</a></li>
                <li><a href="./about.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Sobre nós</a></li>
                <li><a href="./cardápio.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Nosso Cardápio</a></li>
                <li><a href="./reservas.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Reservas</a></li>
                <li><a href="./atrações.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Atrações</a></li>
                <li><a href="./locais.html" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Instalações Físicas</a></li>
                <li><a href="./perfil.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Perfil</a></li> 
            </ul>
        </nav>
    </div>
    <div class="pag1">
        <div class="box">
            <div class="titulo">
                <h1>Atualizar</h1>
            </div>
            <div class="form">
                <form action="updateimage.php" method="POST" enctype="multipart/form-data" id="form">
                    <label for="id_cliente">ID: </label>
                    <input type="text" name="id_cliente" value="<?php echo($id)?>" id="id" readonly>
                    <label for="image"></label>
                    <input type="file" name="image" id ="inputImage">
                    <div class="enviar">
                        <input type="submit" value="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        let form = document.querySelector("#form");
        let inputImage = document.querySelector("#inputImage");
        console.log(inputImage)
        form.onsubmit=(e)=>{
            if(!inputImage.value){
                alert("Você deve alterar a imagem");
                e.preventDefault();
            }
        }
    </script>
    <script src="./scripts/funcoesglobais.js"></script>
</body>
</html>