<?php
    require("./adm/validationlog.php");
    $digitsOfPassword = strlen($_SESSION['senha']);
    $frontPassword = "";    
    for($i = 0; $i<$digitsOfPassword;$i++){
        $frontPassword = $frontPassword."*";
    }
    if(ctype_xdigit(bin2hex($_SESSION['foto']))){
        $base64image = base64_encode($_SESSION['foto']);
        $d['foto_produto'] = $base64image;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do usuário</title>
    <link rel="stylesheet" href="styles/perfil.css">
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
        <div class="parteesquerda">
            <div class="box">
                <?php echo "<h1>Nome Completo: ".$_SESSION['nome']."<h1>"?>
                <?php echo "<h1>Email: ".$_SESSION['email']."<h1>"?>
                <?php echo "<h1>Senha:".$frontPassword."</h1>";?>
                <?php
                if($_SESSION['sexo'] == "M"){
                    echo "<h1>Sexo: Masculino<h1>";
                }else if($_SESSION['sexo'] == "F"){
                    echo "<h1>Sexo: Feminino<h1>";
                }else{
                    echo "<h1>Sexo: Indefinido<h1>";
                }
                 ?>
                <?php echo "<h1>Contato (Num.telefone ): ".$_SESSION['telefone']."<h1>"?>
                <div class="edit">
                    <a href="./atualizardados.php"><button style="cursor:pointer;">Editar</button></a>
                    <?php echo"<a href='alterimage.php?id=".$_SESSION['id']."'><button style='cursor:pointer;margin-left:2vh;'> Alterar Foto</button></a>";
                          echo"<a href='defaultreservas.php?id=".$_SESSION['id']."'><button style='cursor:pointer;margin-left:2vh;'> Minhas Reservas</button></a>"?>
                </div>
            </div>
        </div>
        <div class="partedireita">
            <div class="boxgeral">
                <div class="nomedocliente">
                    <?php echo "<h1>".$_SESSION['nome']."<h1>"?>
                </div>
                <div class="fotodocliente">
                <?php echo "<img src='data:image/jpeg;base64,".$d['foto_produto']."'>";?>
                </div>
                <div class="logout">
                    <button onclick="confirmed()" style="cursor: pointer;">Log-out</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmed(){
            let response = confirm("Você realmente deseja sair da sua conta?");
            if(response){
                window.location.href="./adm/logout.php";
            }
        }
    </script>
    <script src="./scripts/funcoesglobais.js"></script>
</body>
</html>