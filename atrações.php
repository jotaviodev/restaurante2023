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
    
    //Atrações
    $read1 = $conn->query('SELECT * FROM atracoes ORDER BY id_atracao asc');
    $read1->execute();
    $dataAtrac = $read1->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nossas Atrações</title>
    <link rel="stylesheet" href="styles/atraçõespage.css">
    <style>
        .pag3 h1{
            color: #6c0202d2;
            margin-left: 2vh;
        }
        .pag2 a{
            color: white;
        }
    </style>
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
         <div class="escopogeral">
            <div class="parteesquerda">
                <img src="imagens/pag1atracoes.png" alt="">
            </div>
            <div class="partedireita">
                <div class="boxcima">
                    <div class="titulo">
                        <h1>Agenda de Atrações:</h1>    
                    </div>
                    <div class="agenda">
                        <h2>A partir das 20:00h:</h2>
                        <?php
                        //formatar a string pra data
                            for($i=0;$i<count($dataAtrac);$i++){
                                $date = (string)$dataAtrac[$i]['data_atracao'];
                                $dates = explode("-",$date);
                                echo"<h2>".$dates[2]."/".$dates[1]."/".$dates[0].": <a href='./defaultatracoes.php?id=".$dataAtrac[$i]['id_atracao']."'>".$dataAtrac[$i]['nome_atracao']."</a></h2>";
                            }                        
                        ?>
                    </div>
                </div>
            </div>
         </div>   
    </div>


    <div class="pag2">
        <hr>
        <div class="escopogeral">
            <div class="parteesquerda">
                <img src="imagens/micro.jpg" alt="">
            </div>
            <div class="partedireita">
                <div class="boxdireita">
                    <div class="titulo">
                        <h1>Deseja se apresentar?</h1>
                    </div>
                    <h2>Fale conosco</h2>
                    <hr>
                    <h1>WhatsApp: 3346-1480</h1>
                    <h1>Instagram: @Buchodebode</h1>
                    <h1>Facebook: Bucho de Bode</h1>
                    <h1><a href="https://docs.google.com/forms/d/e/1FAIpQLSdOZgUumJ6WhuqOdEJQOKqC4RZIClBkXuaEA0yH1UOeqTK_vA/viewform?usp=sf_link">Formulário de Inscrição</a></h1>
                </div>
            </div>
         </div>
         <hr style="margin-top: 15vh;">
    </div>
    <?php
    if($read->rowCount()!=0){
        echo"<div class='pag3'>
            <div class='title-page3'>
            <h1>Pratos em alta</h1>
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
</html>