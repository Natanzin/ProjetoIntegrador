<?php 

    include_once "../../DataBase/conexao.php";

    $idPlay = $_GET['id'];

    $sqlAlbum = "select * from album where id_artista = '$idPlay' order by nome asc";

    $albuns = $conexao->query($sqlAlbum);
    $albuns = $albuns->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($albuns);
?>