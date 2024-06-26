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
    $quantidadeProdutos = $read->rowCount();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bucho de Bode</title>
    <link rel="shortcut icon" href="imagens/Bucho de Bode.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./styles/mainpagestyle.css">
</head>
<body>
    <div class="pag1">
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
        <div class="theme">
            <div class="button">
                <a href="login.php"><button>Login/Cadastro</button></a>
            </div>
        </div>
    </div>

    <div class="pag2">
        <div class="parteesquerda">
            <div class="cardapio-container">
                <div class="border"></div>
                <div class="border2"></div>
                <div class="border3"></div>
                <div class="border4"></div>
                <div class="image">
                    <a href="./cardápio.php"><button>Aperte aqui</button></a>
                </div>
            </div>
        </div>
        <div class="partedireita">
            <div class="text-container">
                <div class="border"></div>
                <div class="border2"></div>
                <div class="border3"></div>
                <div class="border4"></div>
                <h1>Venha se supreender com as nossas variedades. Temos comidas dos nove cantos do Nordeste</h1>
            </div>
        </div>
    </div>
    <?php
    if($read->rowCount()!=0){
        echo"<div class='pag3'>
            <div class='title-page3'>
            <h1>Pratos em alta</h1>
            <hr>
            </div>
            <div class='foodmaster'>";
                    for($i=0;$i<4 && $i<$read->rowCount();$i++){
                        $currentValues = array();
                        $sort = rand(0,$quantidadeProdutos-1);
                        array_push($currentValues,$sort);
                        foreach($currentValues as $numeroatual){
                            if($numeroatual==$sort){
                                $sort = rand(0,$quantidadeProdutos-1);
                            }
                        }
                        echo"<div class='food'>".
                        "<div class='minbox'>".
                        "<img src='data:image/jpeg;base64,".$data[$sort]['foto_produto']."'>".
                        "</div>".
                        "<div class='name-price'>".
                        "<h2>".$data[$sort]['nome_produto']."  --  ".$data[$sort]['preco_produto']." R$"."</h2>".
                        "</div>".
                        "<div class='text-produto'>".
                        "<h2>".$data[$sort]['ingredientes_produto']."</h2>".
                        "</div>".
                        "</div>";
                    }
           echo"</div>";
    }
    ?>
   <footer class="rodape">
        <div class="esquerda-rodape">
            <div class="titulo">
                <h1>Redes Sociais:</h1>
            </div>
            <div class="imagens">           
                <a href="https://www.instagram.com/bouchodeboderest/"><img src="./imagens/logoinstagram.png" alt=""></a>
                <a href="https://www.facebook.com/profile.php?id=100091269435749&mibextid=ZbWKwL"><img src="./imagens/logofacebook.png" alt=""></a>
            </div>
        </div>
        <div class="meio-rodape" style="height: 100%; align-items: center;">
                    <div class="meioleft" style="">
                        <li><a href="./index.php">Início</a></li>
                        <li><a href="./about.html">Sobre nós</a></li>
                        <li><a href="./cardápio.php">Nosso Cardápio</a></li>
                    </div>
                    <div class="meioright">
                        <li><a href="./reservas.html">Reservas</a></li>
                        <li><a href="./atrações.php">Atrações</a></li>
                        <li><a href="./locais.html">Instalações Físicas</a></li>
                    </div>
        </div>
        <div class="direita-rodape" style="">
            <h4 style="color: whitesmoke;">Telefone: (85)991661199</h5>
            <h4 style="color: whitesmoke;">Email: buchodebode@gmail.com</h5>
            <h5 style="color: whitesmoke;">Copyright © 2023 Bucho de Bode - Todos os direitos reservados</h4>
        </div>
    </footer>
    <script src="./scripts/funcoesglobais.js"></script>
</body>
</html>

