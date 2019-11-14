<!--Verificação de login-->
    <?php 
    session_start();
        $login = $_POST['email'];
        $senha = md5($_POST['senha']);

        $sql = "select * from usuario where email_user='$login' and senha_user='$senha'";

        include_once "../DataBase/conexao.php";
        
        $result = $conexao->query($sql);
        $result = $result->fetchAll(2);
        //echo "<pre>"; print_r($result); die;

        if(!$result){
            echo "
                <script>
                    alert('E-mail ou senha incorretos. Favor repita a operação!');
                    window.location.href = '../index.php';
                </script>
            ";
        }elseif ($login == $result[0]['email_user'] && $senha == $result[0]['senha_user']){
            $_SESSION['nome'] = $result[0]['nome_user'];
            $_SESSION['sobrenome'] = $result[0]['sobrenome_user'];
            $_SESSION['email'] = $result[0]['email_user'];
            $_SESSION['sexo'] = $result[0]['sexo_user'];
            $_SESSION['id_user'] = $result[0]['id_usuario'];
            $_SESSION['senha'] = $result[0]['senha_user'];
            $_SESSION['nascimento'] = $result[0]['nascimento_user'];
            header("location: inicio.php"); 
        }

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Erro ao se logar!</title>
    </head>
    
    
    