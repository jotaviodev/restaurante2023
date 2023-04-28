<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
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
                <h1>Inserir</h1>
            </div>
            <div class="form">
                <form action="insertprodutos.php" method="POST">
                    <label for="nomeDoProduto">Nome: </label>
                    <input type="text" name="nomeDoProduto">
                    <label for="ingredientesDoProduto">Ingredientes: </label>
                    <input type="text" name="ingredientesDoProduto">
                    <label for="precoDoProduto">Preço: </label>
                    <input type="number" name="precoDoProduto">
                    <label for="tipoDeAlimento">Tipo: </label>
                    <select name="tipoDeAlimento">
                        <option value="almocoJantar">Almoço/Jantar</option>
                        <option value="bebidas">Bebidas</option>
                        <option value="cafeDaManha">Café Da Manhã</option>
                        <option value="sobremesas">Sobremesas</option>
                        <option value="combos">Combos</option>
                    </select>
                    <label for="fotoProduto">URL da foto: </label>
                    <input type="text" name="fotoProduto">
                    <div class="enviar">
                        <input type="submit" value="enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>