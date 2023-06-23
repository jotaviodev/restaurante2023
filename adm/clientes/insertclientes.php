<?php
    try{
        require('../connectdb.php');
        $nome = $_POST['nome_usuario'];
        $sexo = $_POST['sexo_usuario'];
        $email = $_POST['email_usuario'];
        $senha = $_POST['senha_usuario'];
        $telefone = $_POST['telefone_usuario'];
        $fotousuario = $_FILES['foto_usuario'];
    
        global $conteudo;
         $arquivo = $fotousuario;
            if($arquivo['error'] == 0) {
                // Abre o arquivo em modo binário
                $handle = fopen($arquivo['tmp_name'], 'rb');
    
                // Converte o arquivo em um formato adequado para salvar no banco de dados
                $conteudo = fread($handle, filesize($arquivo['tmp_name']));
    
                // Fecha o arquivo
                fclose($handle);
            }
            $data = [
                "id_cliente"=>0,
                "nome_cliente"=>$nome,
                "sexo_cliente"=>$sexo,
                "email_cliente"=>$email,
                "senha_cliente"=>$senha,
                "telefone_cliente"=>$telefone,
                "foto_cliente"=>$conteudo
            ];
        $query = "INSERT INTO cliente (id_cliente,nome_cliente,sexo_cliente,email_cliente,senha_cliente,telefone_cliente,foto_cliente)VALUES (:id_cliente,:nome_cliente,:sexo_cliente,:email_cliente,:senha_cliente,:telefone_cliente,:foto_cliente)";
        $inserir = $conn->prepare($query);
        $inserir->execute($data);
        echo "
            <script>
                alert('Cliente cadastrado com sucesso!');
                window.location.href = '../../login.php'
            </script>
        ";
    }catch(Exception $e){
        echo "
            <script>
                alert('O email informado já está em uso por outro usuário, tente novamente com um email distinto.');
                window.location.href = '../../cadastrousuarios.html'
            </script>
        ";
    }

?>