<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Músicas_FavoriteSongs&copy;</title>
</head>
<body>
    
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../tela_inicial/inicio.php">FavoriteSongs&copy;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../artistas/artistas.php">Artistas <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../musicas/musicas.php">Músicas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../playlists/playlists.php">playLists</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gêneros</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php 
                
                    $generos = [
                        'classica',
                        'funk',
                        'gospel',
                        'metal',
                        'pop',
                        'punk',
                        'rap',
                        'rock',
                        'sertanejo'
                    ];

                    foreach ($generos as $genero){
                        echo "<a class='dropdown-item' href='../generos/$genero.php'>$genero</a>";
                    }

                ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Meu perfil</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../conta_user/info_conta.php">Minha conta</a>
                </div>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
    </div>

    <script src="../bootstrap/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>