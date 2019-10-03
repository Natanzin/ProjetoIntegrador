<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FavoriteSongs&copy;</title>
    <style>
        hr.clear{
            clear: both;
        }

        #logo{
            float: left;
            padding: 0 90px;
        }

        #login{
            padding: 45px;
            float: right;            
        }

        footer{
            text-align: center;
            position: relative;
            top: 130px;
        }

        fieldset{
            border-radius: 15px;
        }

        input {
            text-align: center;
        }
    </style>
</head>

<body>

    <div id="logo">
        <h1 style="text-align: center;">FavoriteSongs&copy; <br> ¯\_(ツ)_/¯</h1>
    </div>
    <div id="login">
        <form action="inicio.php">
            <label for="user">Email:
                <input type="text" name="user" id="user">
            </label>
            <label for="password">Senha:
                <input type="password" name="password" id="password">
            </label>
            <input type="submit" value="Entrar">
        </form>
    </div>
    <hr class="clear">
    <div id="cadastro" style="width: 35%; margin: 0 auto; text-align: center;">
        <fieldset>
            <legend>Criar uma nova conta</legend>
            <form action="cadastrar.php" method="POST">
                <br>
                <input type="text" name="nome" id="nome" placeholder="Nome"required>
                <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required><br><br>
                <input type="email" name="email" id="email" placeholder="E-mail" style="width: 84.2%;" required><br><br>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <input type="password" name="conf_senha" id="conf_senha" placeholder="Confirmar senha"required><br><br>
                <label for="date"> Data de nascimento
                    <input type="date" name="data_nascimento" id="date" required>
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