<!--Verificação de login-->
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ERRO!</title>
        <style>
            .container {
                width: 100vw;
                height: 100vh;
                background: url(imagens/background_senhaincorreta.jpg) no-repeat;
                background-size: 100%;
                background-attachment: fixed;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center
            }
            .box {
                background: none;
                color: white;
                text-shadow: 3px 1px gray;
                text-align: center;
            }
            body {
                margin: 0px;
            }
            button a {
                text-decoration: none;
                color: white;
            }
            button {
                background: rgba(0,0,0,0.3);
                padding:  25px 45px;
                border-color: silver;
                border-radius: 5px;
            }
            button:hover {
                font-weight: bolder;
                background: rgba(0,0,0,0.7);
                box-shadow: 3px 3px black;
            }
        </style>
    </head>
    <body>
        <?php 
        session_start();
            $login = $_POST['email'];
            $senha = md5($_POST['senha']);

            $sql = "select * from usuario where email_user='$login' and senha_user='$senha'";

            include_once "../DataBase/conexao.php";
            
            $result = $conexao->query($sql);
            $usuarios = $result->fetchAll(2);

            foreach($usuarios as $usuario){
                if ($login == $usuario['email_user'] && $senha == $usuario['senha_user']){
                    $_SESSION['nome'] = $usuario['nome_user'];
                    $_SESSION['sexo'] = $usuario['sexo_user'];
                    header("location: inicio.php"); 
                }
            }
        ?>
        <div class="container">
            <div class="box">
                <h1>E-MAIL OU SENHA INCORRETA</h1> <br><br>
                <h2>Refaça a operação!</h2><br><br>
                <button><a href="../index.php">VOLTAR</a></button>
            </div>
        </div>
    </body>
    </html>
    