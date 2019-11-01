<?php

include_once "../../DataBase/conexao.php";

$nome = $_POST['nomeAlbum'];
$ano = $_POST['anoAlbum'];
$artista = $_POST['artista'];

    $sql = "insert into album(nome,ano,id_artista) values ('$nome','$ano','$artista')";

    $conexao->query($sql);

?>