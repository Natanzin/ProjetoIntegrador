<?php
    session_start();
    include_once "../../DataBase/conexao.php";

    $senhaAntiga = md5($_POST['senhaAntiga']);
    $novaSenha = md5($_POST['novaSenha']);
    $confirmSenha = md5($_POST['confirmSenha']);

    if($senhaAntiga == $_SESSION['senha']){
        if($novaSenha == $confirmSenha){
            $sql = "update usuario set senha_user = '$novaSenha' where id_usuario = '{$_SESSION['id_user']}'";
            $conexao->query($sql);
?>
            <script>
                alert('Entre novamente para salvar as alterações!');
                window.location.href = "../../index.php";
            </script>
<?php
        }else{ 
?>
            <script>
                alert('Novas senhas não confere!');
                window.location.href = "../../telas/user.php";
            </script>
<?php 
        }
    }else{ 
?>
        <script>
            alert('Usuário não confere!');
            window.location.href = "../../index.php";
        </script>
<?php
        session_destroy();
    }

?>