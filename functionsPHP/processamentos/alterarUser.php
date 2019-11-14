<?php

session_start();
include_once "../../DataBase/conexao.php";

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];

    $sql = "update usuario set nome_user = '$nome', sobrenome_user = '$sobrenome', email_user = '$email' where id_usuario = '{$_SESSION['id_user']}'; ";

    $conexao->query($sql);

?>

<script>
        alert('Entre novamente para salvar as atualizações!');
        window.location.href = "../../index.php";
</script>