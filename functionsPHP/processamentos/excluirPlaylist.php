<?php
    
    include_once "../../DataBase/conexao.php";

    $idPlaylist = $_GET['id'];

    $sqlDeletePlay = "delete from playlist where id_playlist = $idPlaylist";
    $sqlDeleteDB = "delete from musicas_playlist where id_playlist = $idPlaylist";

    $conexao->query($sqlDeletePlay);
    $conexao->query($sqlDeleteDB);

    header('location: ../../telas/playlists.php')
?>