<?php 

    include_once "../../DataBase/conexao.php";

    $idPlay = $_GET['id'];

    $sqlAlbum = "select * from album join artista on album.id_artista = artista.id_artista where album.id_artista = '$idPlay' order by nome asc";

    $albuns = $conexao->query($sqlAlbum);
    $albuns = $albuns->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($albuns);
?>