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
                <h1>Inserir</h1>
            </div>
            <div class="form">
                <form action="insertprodutos.php" method="POST" enctype="multipart/form-data">
                    <label for="nomeDoProduto">Nome: </label>
                    <input type="text" name="nomeDoProduto" id="nomeDoProduto">
                    <label for="ingredientesDoProduto">Ingredientes: </label>
                    <input type="text" name="ingredientesDoProduto" id="ingredientesDoProduto">
                    <label for="precoDoProduto">Preço(R$): </label>
                    <input type="text" name="precoDoProduto" id="precoDoProduto">
                    <label for="tipoDeAlimento">Tipo: </label>
                    <select name="tipoDeAlimento" id="tipoDeAlimento">
                        <option value="almocoJantar">Almoço/Jantar</option>
                        <option value="bebidas">Bebidas</option>
                        <option value="cafeDaManha">Café Da Manhã</option>
                        <option value="sobremesas">Sobremesas</option>
                        <option value="combos">Combos</option>
                    </select>
                    <label for="fotoProduto">URL da foto (358x387): </label>
                    <input type="file" name="fotoProduto" id="fotoProduto">
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