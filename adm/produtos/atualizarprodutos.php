<?php
require("../connectdb.php");
    $id = $_GET['id'];
    $read = $conn->query("SELECT * FROM produtos where id_produto ='$id'");
    $read->execute();
    $data = $read->fetchAll(); 

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
                <form action="updateprodutos.php" method="POST" enctype="multipart/form-data">
                    <label for="idDoProduto">ID: </label>
                    <input type="text" name="idDoProduto" value="<?php echo($id)?>" readonly>
                    <label for="nomeDoProduto">Nome: </label>
                    <input type="text" name="nomeDoProduto" value="<?php echo($data[0]['nome_produto'])?>">
                    <label for="ingredientesDoProduto">Ingredientes: </label>
                    <input type="text" name="ingredientesDoProduto" value="<?php echo($data[0]['ingredientes_produto'])?>">
                    <label for="precoDoProduto">Preço: </label>
                    <input type="text" name="precoDoProduto" value="<?php echo($data[0]['preco_produto'])?>">
                    <label for="tipoDeAlimento">Tipo: </label>
                    <select name="tipoDeAlimento" id="">
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
                    <label for="fotoProduto">URL da foto: </label>
                    <input type="file" name="fotoProduto">
                    <div class="enviar">
                        <input type="submit" value="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>