<?php  
session_start();
include_once "../../DataBase/conexao.php";

    $nome = $_POST['nome_msc'];
    $url = $_POST['url_msc'];
    $gnr = $_POST['gnr_msc'];
    $alb = $_POST['alb_msc'];
    $art = $_POST['art_msc'];

    $url = strrchr($url,'/');

    //inserir musica no DB
    
        $sql = "insert into musica(nome_musica,url_musica,id_genero,id_usuario,id_album,id_artista) 
                values ('$nome','$url','$gnr','{$_SESSION['id_user']}','$alb','$art')";

        $conexao->query($sql);

        header('location: ../../telas/musicas.php');
?>

   
