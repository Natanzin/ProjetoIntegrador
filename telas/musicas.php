<?php include_once "../template/cabecalho.php"; ?>

    <h2>Músicas</h2>
    <a href="../functionsPHP/new_msc.php" class="btn btn-outline-success">Nova música</a>
    <br><br>
    <h3 class="border-bottom">Suas músicas...</h3>
        <div class="row" align="center">
            
            <?php
            include_once "../DataBase/conexao.php";
                
                //Procuas as músicas do usuário no DB
                $sqlMusica = "select musica.id_musica, musica.nome_musica, musica.url_musica, musica.id_genero, musica.id_usuario, musica.id_album, artista.nome_artista
                            from musica inner join artista on artista.id_artista = musica.id_artista where id_usuario = '{$_SESSION['id_user']}' order by musica.nome_musica";
                $musicas = $conexao->query($sqlMusica);
                $musicas = $musicas->fetchAll(PDO::FETCH_ASSOC);

                if($musicas){
                    foreach($musicas as $musica){

                        echo "
                            <div class='col'>
                                <div class='card border-primary' style='width:15rem; background: rgba(50, 153, 204, 0.3);'>
                                    <iframe class='card-img-top' src='https://www.youtube.com/embed{$musica['url_musica']}' frameborder='0' 
                                    allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                    <div class='card-body'>
                                        <p class='card-text text-center font-weight-bold'>{$musica['nome_musica']}</p>
                                        <p class='card-text text-center'>{$musica['nome_artista']}</p>
                                        <a href='../functionsPHP/new_Musica_playlist.php?idmsc={$musica['id_musica']}&&nomemsc={$musica['nome_musica']}' class='card-link font-weight-bold'>+ incluir na playlist</a>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                }

                

            ?>
        
        </div>
        
    <br><br>
    <h3 class="border-bottom">Todas as músicas...</h3>
     
     <div class="row" align="center">
         
            <?php
            
                //Procuas todas as músicas do DB
                $sqlTdMusica = "select musica.id_musica, musica.nome_musica, musica.url_musica, musica.id_genero, musica.id_usuario, musica.id_album, artista.nome_artista
                            from musica inner join artista on artista.id_artista = musica.id_artista order by musica.nome_musica";
                $td_musicas = $conexao->query($sqlTdMusica);
                $td_musicas = $td_musicas->fetchAll(PDO::FETCH_ASSOC);

                foreach($td_musicas as $tds_musica){

                    echo "
                        <div class='col'>
                            <div class='card border-primary' style='width:15rem; background: rgba(50, 153, 204, 0.3);'>
                                <iframe class='card-img-top' src='https://www.youtube.com/embed{$tds_musica['url_musica']}' frameborder='0' 
                                allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                <div class='card-body'>
                                    <p class='card-text text-center font-weight-bold'>{$tds_musica['nome_musica']}</p>
                                    <p class='card-text text-center'>{$tds_musica['nome_artista']}</p>
                                    <a href='../functionsPHP/new_Musica_playlist.php?idmsc={$tds_musica['id_musica']}&&nomemsc={$tds_musica['nome_musica']}' class='card-link font-weight-bold'>+ incluir na playlist</a>
                                </div>
                            </div>
                        </div>
                    ";
                }

            ?>
         
    </div>
    
<?php include_once "../template/rodape.php"; ?>

