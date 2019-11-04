<?php include_once "../template/cabecalho.php"; ?>

    <h2>Músicas</h2>
    <a href="../functionsPHP/new_msc.php" class="btn btn-outline-success">Nova música</a>
    <br><br>
    <h3 class="border-bottom">Suas músicas...</h3>
    
    <?php
    include_once "../DataBase/conexao.php";
        
        //Procuas as músicas do usuário no DB
        $sqlMusica = "select * from musica where id_usuario = '{$_SESSION['id_user']}'";
        $musicas = $conexao->query($sqlMusica);
        $musicas = $musicas->fetchAll(PDO::FETCH_ASSOC);
        //Procura o artista no DB
        foreach($musicas as $msc_art){
            $sqlArtista = "select * from artista where id_artista = {$msc_art['id_artista']}";
        }
        $artista = $conexao->query($sqlArtista);
        $artista = $artista->fetchAll(PDO::FETCH_ASSOC);
        
        //echo "<pre>"; print_r($artista); die;

        foreach($musicas as $musica){

            echo "<div class='card border-primary' style='width:15rem;'>
                    <iframe class='card-img-top' src='https://www.youtube.com/embed{$musica['url_musica']}' frameborder='0' 
                    allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                    <div class='card-body'>
                        <p class='card-text'>{$musica['nome_musica']}</p>
                        <p class='card-text'>{$musica['id_artista']}</p>
                        <a href='#' class='card-link'>+ incluir na playlist</a>
                    </div>
                </div>";
        }

        
    ?>

    <h3 class="border-bottom">Todas as músicas...</h3>

<?php include_once "../template/rodape.php"; ?>

