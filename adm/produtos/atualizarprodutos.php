<?php
require("../validationlogadm.php");
require("../connectdb.php");
    $id = $_GET['id'];
    $read = $conn->query("SELECT * FROM produtos where id_produto ='$id'");
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

    $categorias = array("Almoço/Jantar","Bebidas","Café Da Manhã","Sobremesas","Combos");
    $bd_categorias = array("almocoJantar","bebidas","cafeDaManha","sobremesas","combos");
    
?>       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produtos</title>
    <link rel="stylesheet" href="../stylesadm/cadastroprodutos.css">
</head>
<body>
<div class="main-menu">
        <nav>
            <ul>
                <div class="menu">
                    <a href="../indexadm.php"><img src="../../imagens/Logos/logopreta.png" alt="" style="cursor: pointer;"></a>
                </div>
                <li><a href="../indexprodutos.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Cardápio</a></li>
                <li><a href="../mesasEspacos.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Mesas e espaços</a></li>
                <li><a href="../reservas.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Reservas</a></li>
                <li><a href="../admatracoes.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Atrações</a></li>
                <li><a href="../admusuarios.php" onmouseover="alteraCorMenu(this)" onmouseout="retornaCorMenu(this)" id="teste">Usuários</a></li>

            </ul>
        </nav>
    </div> 
    <div class="pag1">
        <div class="box">
            <div class="titulo">
                <h1>Atualizar</h1>
            </div>
            <div class="form">
                <form action="updateprodutos.php" method="POST" enctype="multipart/form-data">
                    <label for="idDoProduto">ID: </label>
                    <input type="text" name="idDoProduto" value="<?php echo($id)?>" readonly>
                    <label for="nomeDoProduto">Nome: </label>
                    <input type="text" name="nomeDoProduto" id="nomeDoProduto" value="<?php echo($data[0]['nome_produto'])?>">
                    <label for="ingredientesDoProduto">Ingredientes: </label>
                    <input type="text" name="ingredientesDoProduto" id="ingredientesDoProduto" value="<?php echo($data[0]['ingredientes_produto'])?>">
                    <label for="precoDoProduto">Preço(R$): </label>
                    <input type="text" name="precoDoProduto" id="precoDoProduto" value="<?php echo($data[0]['preco_produto'])?>">
                    <label for="tipoDeAlimento">Tipo: </label>
                    <select name="tipoDeAlimento" id="tipoDeAlimento">
                    <?php
                        foreach ($bd_categorias as $valor) {
                            if ($valor == $data[0]['tipo_produto'])
                            echo "<option value='".$valor."'>".$valor."</option>";
                        }
                        foreach ($bd_categorias as $valor) {
                            if ($valor != $data[0]['tipo_produto'])
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
    <script src="../../scripts/cadastroprodutos.js"></script>
</body>
</html>