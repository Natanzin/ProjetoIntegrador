<?php  

include_once "../../DataBase/conexao.php";

    $nome = $_POST['nome_artista'];

    $extensao = strtolower(strrchr($_FILES['arquivo']['name'], ".")); //pega a extensao do arquivo

    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo

    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql = "insert into artista (nome_artista,foto_artista) values ('$nome','$novo_nome')";

    $conexao->query($sql);

    header('location: ../../telas/artistas.php');

?>

     