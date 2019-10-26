<?php 
session_start(); 
if(!empty($_GET['acao']) && $_GET['acao']=='deslogar'){
    session_destroy();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FavoriteSongs&copy;</title>
    <style>
        hr.clear{clear: both;}
        #logo{float: left;padding: 0 90px;}
        #login{padding: 45px;float: right;}
        footer{text-align: center;position: relative;top: 130px;}
        fieldset{border-radius: 15px;}
        input {text-align: center;}
    </style>
</head>

<body>

    <div id="logo">
        <h1 style="text-align: center;">FavoriteSongs&copy; <br> ¯\_(ツ)_/¯</h1>
    </div>
    <div id="login">
        <form action="tela_inicial/login.php" method="POST">
            <label for="email">Email:
                <input type="text" name="email" id="email" required>
            </label>
            <label for="senha">Senha:
                <input type="password" name="senha" id="senha" required autocomplete="off">
            </label>
            <input type="submit" value="Entrar">
        </form>
    </div>
    <hr class="clear">
    <div id="cadastro" style="width: 35%; margin: 0 auto; text-align: center;">
        <fieldset>
            <legend>Criar uma nova conta</legend>
            <form action="tela_inicial/cadastrar.php" method="POST" >
                <br>
                <input type="text" name="nome" id="nome" placeholder="Nome" required autocomplete="off">
                <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required autocomplete="off"><br><br>
                <input type="email" name="email" id="email" placeholder="E-mail" style="width: 84.2%;" required autocomplete="off"><br><br>
                <input type="password" name="senha" id="senha" placeholder="Senha" required autocomplete="off">
                <input type="password" name="conf_senha" id="conf_senha" placeholder="Confirmar senha"required autocomplete="off"><br><br>
                <label for="date"> Data de nascimento
                    <input type="date" name="data_nascimento" id="date" required autocomplete="off">
                </label><br><br>
                Sexo
                <label for="sexoM">
                    <input type="radio" name="sexo" id="sexoM" value="masculino" required>Masculino
                </label>
                <label for="sexoF">
                    <input type="radio" name="sexo" id="sexoF" value="feminino" required>Feminino
                </label><br><br>
                <input type="submit" value="Cadastre-se">
            </form>
        </fieldset>
    </div>
    <footer>
        <h2>FavoriteSongs&copy;<br> Natan Silva ¯\_(ツ)_/¯ Alberto Matos</h2>        
    </footer>
</body>

</html>