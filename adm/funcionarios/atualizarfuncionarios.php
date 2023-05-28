<?php
require("../connectdb.php");
    $id = $_GET['id'];
    $read = $conn->query("SELECT * FROM funcionarios where id_funcionario ='$id'");
    $read->execute();
    $data = $read->fetchAll(); 

    $bd_generos = array('M','F','U');
    $bd_cargos = array('atendente','auxiliarDeCozinha','cozinheiro','faxineiro','garçom','gerente');
?>       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro atracoes</title>
    <link rel="stylesheet" href="../stylesadm/cadastroatracoes.css">
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
                <form action="updatefuncionarios.php" method="POST">
                    <label for="id_funcionario">ID: </label>
                    <input type="text" name="id_funcionario" value="<?php echo($id)?>" readonly>

                    <label for="nome_funcionario">Nome: </label>
                    <input type="text" name="nome_funcionario" value="<?php echo($data[0]['nome_funcionario'])?>">
                    
                    <label for="cpf_funcionario">Cpf: </label>
                    <input type="text" name="cpf_funcionario" value="<?php echo($data[0]['cpf_funcionario'])?>">
                    
                    <label for="sexo_funcioario">Sexo:</label>
                    <select name="sexo_funcionario" >
                    <?php
                        foreach ($bd_generos as $valor) {
                            if ($valor == $data[0]['tipo_produto'])
                            echo "<option value='".$valor."'>".$valor."</option>";
                        }
                        foreach ($bd_generos as $valor) {
                            if ($valor != $data[0]['tipo_produto'])
                            echo "<option value='".$valor."'>".$valor."</option>";
                        }
                    ?>
                    </select>

                    <label for="cargo_funcionario">Cargo: </label>
                    <select name="cargo_funcionario" >
                    <?php
                        foreach ($bd_cargos as $valor) {
                            if ($valor == $data[0]['tipo_produto'])
                            echo "<option value='".$valor."'>".$valor."</option>";
                        }
                        foreach ($bd_cargos as $valor) {
                            if ($valor != $data[0]['tipo_produto'])
                            echo "<option value='".$valor."'>".$valor."</option>";
                        }
                    ?>
                    </select>

                    <label for="email_funcionario">Email: </label>
                    <input type="text" name="email_funcionario" value="<?php echo($data[0]['email_funcionario'])?>">
                    
                    <label for="senha_funcionario">Senha: </label>
                    <input type="text" name="senha_funcionario" value="<?php echo($data[0]['senha_funcionario'])?>">
                    
                    <label for="telefone_funcionario">Telefone: </label>
                    <input type="text" name="telefone_funcionario" value="<?php echo($data[0]['telefone_funcionario'])?>">
                    
                    <label for="foto_funcionario">Foto: </label>
                    <input type="text" name="foto_funcionario" value="<?php echo($data[0]['foto_funcionario'])?>">
                    
                    <label for="salario_funcionario">Salario: </label>
                    <input type="text" name="salario_funcionario" value="<?php echo($data[0]['salario_funcionario'])?>">
                    <div class="enviar">
                        <input type="submit" value="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>