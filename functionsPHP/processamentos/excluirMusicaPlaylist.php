<?php
    
    include_once "../../DataBase/conexao.php";

    $idMsc = $_GET['idMsc'];
    $idPlay = $_GET['idPlay'];

    $sqlDelete = "delete from musicas_playlist where id_musica = $idMsc";

    $conexao->query($sqlDelete);

    header("location: ../../telas/musica_playlist.php?id=$idPlay");
?>