<?php 
    session_start();
    if(empty($_SESSION['nome'])){
        header('location: ../index.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>FavoriteSongs&copy;</title>
    <script src="../bootstrap/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
        body{
            background: whitesmoke;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="../tela_inicial/inicio.php">FavoriteSongs&copy;</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../telas/musicas.php">Musicas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../telas/albuns.php">Álbuns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../telas/artistas.php">Artistas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../telas/playlists.php">Playlists</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../telas/genero.php">Gênero</a>
            </li>
        </ul>

        <div class="form-inline mt-2 mt-md-0">
            <div class="col">
                <div class="text-right">
                    <p style="color: silver; margin: 0;">Seja bem 
                    <?php 
                    if($_SESSION['sexo']=='masculino'){
                        echo " vindo ";
                    }elseif($_SESSION['sexo']=='feminino'){
                        echo " vinda ";
                    }
                    echo $_SESSION['nome'];
                    ?>
                    </p>
                </div>
                <div class="row ">
                    <div class="text-right">
                        <a href="../telas/user.php" class="btn btn-outline-info my-2 my-sm-0">Minha conta</a>&nbsp;
                        <a href="../index.php?acao=deslogar" class="btn btn-outline-danger my-2 my-sm-0">Fazer logoff</a>
                    </div>
                    
                </div>
            </div>
        </div>
      </div>
    </nav>
    
    <div class="container" style="margin-top: 80px;">

 