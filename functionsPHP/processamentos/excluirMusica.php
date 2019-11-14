<?php

    session_start();

    $id = $_GET['id'];

    //echo $id;

    include_once "../../DataBase/conexao.php";

    $sql = "delete from musica where id_musica = $id";
    $conexao->query($sql);

    $errorInfo = $conexao->errorInfo();
    
    $_SESSION['mensagem'] = (!empty($errorInfo[0]) && $errorInfo[0]>1) ? 
                            'O registro não pode ser excluído' : 
                            'Registro excluído com sucesso';    

    header('location: ../ger_msc.php')

?>