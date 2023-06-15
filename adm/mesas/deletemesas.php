<?php
    require("../connectdb.php");
    $id = $_GET['id'];
    try{        
        $query = "DELETE FROM mesas where id_mesa = '$id' ";
        $deletar = $conn->query($query);
        $deletar->execute();

        header("location: lermesas.php");
    }catch(Exception $e){
        echo "
            <script>
                alert('A mesa não pode ser excluída, pois há reservas cuja a mesma é destinada.');
                window.location.href = 'lermesas.php' // redirecionando pelo js
            </script>
        ";
    } 

?>

