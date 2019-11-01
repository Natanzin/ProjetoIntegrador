<?php  

include_once "../../DataBase/conexao.php";

    $nome = $_POST['new_genero'];

    //inserir genero no DB
    
        $sql = "insert into genero(nome_genero) values ('$nome');";

        $conexao->query($sql);

?>

     