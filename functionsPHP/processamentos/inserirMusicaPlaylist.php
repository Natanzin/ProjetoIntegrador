<?php

    include_once "../../DataBase/conexao.php";

    session_start();
    //echo $_SESSION['id_msc']; die;

    $id_play = $_GET['idplay'];

    $sql = "insert into musicas_playlist (id_musica, id_playlist) values ('{$_SESSION['id_msc']}','$id_play')";


    $conexao->query($sql);

    header('location: ../../telas/musicas.php');

?>