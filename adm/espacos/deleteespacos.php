<?php
    require("../connectdb.php");
    
    try{
        $id = $_GET['id'];
        $query2 = "DELETE FROM espacos where id_espaco = '$id' ";
        $deletar2 = $conn->query($query2);
        $deletar2->execute();
        header ("location: lerespacos.php");
    }catch(Exception $e){
        echo "
            <script>
                alert('A mesa não pode ser excluída, pois há reservas cuja a mesma é destinada.');
                window.location.href = 'lerespacos.php' // redirecionando pelo js
            </script>
        ";
    } 
?>

