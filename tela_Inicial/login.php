<!--Verificação de login-->
<?php 
    $login = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "select * from usuario where email_user='$login' and senha_user='$senha'";

    include_once "../DataBase/conexao.php";
    
    $result = $conexao->query($sql);
    $cargos = $result->fetchAll(2);

    foreach($cargos as $cargo){
        if ($login == $cargo['email_user'] && $senha == $cargo['senha_user']){
            header("location: inicio.php"); 
        }
    }
    echo"<script language='javascript' type='text/javascript'>
    alert('Email e/ou senha incorretos');
    window.location.href='../index.php';</script>";
       
?>
