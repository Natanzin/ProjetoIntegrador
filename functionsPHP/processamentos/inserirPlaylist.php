<?php  
session_start();
include_once "../../DataBase/conexao.php";

    $nome = $_POST['new_playlist'];

    //inserir playlist no DB
    
        $sql = "insert into playlist(nome_playlist,id_usuario) values ('$nome','{$_SESSION['id_user']}')";

        $conexao->query($sql);

        header('location: ../../telas/playlists.php');
?>

   
