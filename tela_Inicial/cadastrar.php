<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
    <?php 
        
        $senha = md5($_POST['senha']);
        $conf_senha = md5($_POST['conf_senha']);
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $nascimento = $_POST['data_nascimento'];
        $sexo = $_POST['sexo'];

        //confere se as senhas são diferentes.
        if($senha != $conf_senha){
            echo "Senhas não confere, favor repita a operação!";
            die;
        }else{
            //conexão com o banco de dados
            $conexao = new PDO('mysql:host=localhost;dbname=projetointegrador;charset=utf8','root','');

            //código SQL de inserção 
            $sql = "insert into usuarios (nome_user, sobrenome_user, email_user, senha_user, nascimento_user, sexo_user) 
                values ('$nome','$sobrenome','$email','$senha','$nascimento','$sexo')";

            //Envia o registro ao banco de dados.
            $conexao->query($sql);

            //mensagem de cadastro
            echo "<h1>Cadastro realizado com sucesso!</h1><br>";
            if($sexo == "masculino"){
                echo "Parabéns senhor $nome, ";
            }else{
                echo "Parabéns senhora $nome, ";
            }
            echo "você acaba de efetuar o seu cadastro no melhor site de playlists do mundo! <br>
                Entre com seu email e senha para começar a desfrutar de nossa plataforma.<br><br>";
            
        }

    ?>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>