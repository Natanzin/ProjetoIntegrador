<?php 
session_start(); 
if(!empty($_GET['acao']) && $_GET['acao']=='deslogar'){
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>FavoriteSongs&copy;</title>
    <script src="bootstrap/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center" align="left">
                <img class="logo" src="img/logo.png" alt="logo FavoriteSongs&copy;" title="FavoriteSongs&copy;" 
                style="
                    height: 190px;
                " >
            </div>
            <div class="col text-center" align="right">
                <div class="card" style="width: 20rem; margin:0 auto; border: none;">
                    <div class="card-body">
                        <h5 class="card-title">ENTRAR</h5>
                        <div class="form-group">
                            <form action="tela_inicial/login.php" method="POST">
                                <input required class="text-center form-control mb-2" type="text" name="email" id="email" placeholder="E-mail">
                                <input required class="text-center form-control mb-2" type="password" name="senha" id="senha" placeholder="Senha">
                                <input class="form-control btn btn-success" type="submit" value="Entrar"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <div class="row">
                    <div class="col text-center" align="left" style="width: 50%; margin: 0 auto;">
                        <h3>O melhor site de playlists do mundo!</h3> <br><br><br>
                        <p>
                            FavoriteSongs é a solução ideal para você que procura uma experiência objetiva na construção de playlists. <br>
                            Aqui você pode adicionar seus artistas favoritos, criar seus álbuns com as suas músicas prediletas e montar as 
                            suas melhores playlists com qualquer música que tenha disponível no youtube. <br><br>
                            <span class="font-weight-bold">OBS: O bom aproveitamento da plataforma depende da sua boa conduta, faça bom uso e seja bem vindo!</span>
                        </p><br><br><br><br>
                        <h6>Created by Natan Silva e Alberto Matos</h6>
                    </div>
                    <div class="col text-center" align="right" style="width: 50%;">
                        <div class="card text-center" style="width: 22rem; margin: 0 auto;">
                            <div class="card-body">
                                <h4 class="card-title">CADASTRE-SE</h4>
                                <form action="tela_inicial/cadastrar.php" method="POST">
                                    <div class="form-group">
                                        <input required class="form-control text-center" type="text" name="nome" id="nome" placeholder="nome">
                                        <input required class="form-control text-center" type="text" name="sobrenome" id="sobrenome" placeholder="sobrenome">
                                        <input required class="form-control text-center" type="text" name="email" id="email" placeholder="email">
                                        <input required class="form-control text-center" type="password" name="senha" id="senha" placeholder="senha">
                                        <input required class="form-control text-center" type="password" name="conf_senha" id="conf_senha" placeholder="confirmar senha">
                                        <label for="data_nascimento" class="font-weight-bold">Data de nascimento</label>
                                        <input required class="form-control text-center" type="date" name="data_nascimento" id="data_nascimento">
                                        <p class="font-weight-bold" style="margin:0; padding:none;">Sexo</p>
                                        <input required class="text-center" type="radio" name="sexo" id="sexoM" value="masculino"><label for="sexoM" class="font-weight-bold">Masculino</label>
                                        &nbsp;
                                        <input required class="text-center" type="radio" name="sexo" id="sexoF" value="feminino"><label for="sexoF" class="font-weight-bold">Feminino</label><br>
                                        <input class="form-control text-center btn btn-success" type="submit" value="Cadastrar">
                                        <p style="font-size: 10px;">Ao clicar em Cadastrar, você concorda com nossos Termos, Política de Dados e Política de Cookies.</p>
                                    </div>                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
    
</body>
</html>