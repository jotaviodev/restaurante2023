<?php
    require("./adm/connectdb.php");
    $read = $conn->query('SELECT * FROM produtos ORDER BY id_produto asc');
    $read->execute();
    $dados = $read->fetchAll(); 
    $data = [];
    foreach($dados as $d){
        if(ctype_xdigit(bin2hex($d['foto_produto']))){
            $base64image = base64_encode($d['foto_produto']);
            $d['foto_produto'] = $base64image;
        }
        $data[] = [
            "id_produto"=>$d['id_produto'],
            "nome_produto"=>$d['nome_produto'],
            "ingredientes_produto"=>$d['ingredientes_produto'],
            "preco_produto"=>$d['preco_produto'],
            "tipo_produto"=>$d['tipo_produto'],
            "foto_produto"=>$d['foto_produto'], 
        ];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cardápio</title>
    <link rel="stylesheet" href="styles/cardápiopage.css">
</head>
<body>
    <div class="pag1">
        <div class="main-menu">
            <nav>
                <ul>
                    <div class="menu">
                        <a href="./index.php"><img src="imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
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
            <div class="title-page3">
            <h1>Nosso Cardápio</h1>
            <hr>
            </div>
            <div class="foodmaster">
            <?php
                for($i=0;$i<count($data);$i++){
                    echo"<div class='food'>".
                    "<div class='minbox'>".
                    "<img src='data:image/jpeg;base64,".$data[$i]['foto_produto']."'>".
                    "</div>".
                    "<div class='name-price'>".
                    "<h2>".$data[$i]['nome_produto']."  --  ".$data[$i]['preco_produto']." R$"."</h2>".
                    "</div>".
                    "<div class='text-produto'>".
                    "<h3>".$data[$i]['ingredientes_produto']."</h3>".
                    "</div>".
                    "</div>";
                }
            ?>
            </div>

            </div>
        </div>
    </div>
    
</body>
</html>