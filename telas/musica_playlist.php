<?php include_once "../template/cabecalho.php"; ?>

    
            
            <?php
            include_once "../DataBase/conexao.php";

            $_SESSION['idPlay'] = $_GET['idPlay'];
            $_SESSION['idUser'] = $_GET['idUser'];
                
                //Procuas as músicas do usuário no DB
                $sqlMusica = "select m.nome_musica, m.url_musica, m.id_usuario, mp.id_musica, mp.id_playlist, p.nome_playlist, a.nome_artista from musica m 
                join musicas_playlist mp on m.id_musica = mp.id_musica
                join artista a on a.id_artista = m.id_artista
                join playlist p on mp.id_playlist = p.id_playlist where mp.id_playlist = '{$_SESSION['idPlay']}'";

                $musicas = $conexao->query($sqlMusica);
                $musicas = $musicas->fetchAll(PDO::FETCH_ASSOC);

                //echo "<pre>"; print_r($musicas); die;
            ?>

            <h3 class="border-bottom">
            <?php  
            
                if(!$musicas){
                    echo "
                    <div class='col text-center'>
                    <br>
                        Nenhuma música adicionada a playlist! <br>
                        <a href='playlists.php' align='right' class='btn btn-primary'>Voltar</a>
                    <br><br>
                    </div>
                    ";
                }else{
                   echo "
                   <a href='playlists.php' align='right' class='btn btn-primary'>Voltar</a><br>
                   <div class='text-center'>{$musicas[0]['nome_playlist']} </div>
                   "; 
                }                   

            ?></h3>
                <br>
                <div class="row" align="center">

            <?php
                foreach($musicas as $musica){

                    echo "
                        <div class='col'>
                            <div class='card border-primary' style='width:15rem; background: rgba(50, 153, 204, 0.3);'>
                                <iframe class='card-img-top' src='https://www.youtube.com/embed{$musica['url_musica']}' frameborder='0' 
                                allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                <div class='card-body'>
                                    <p class='card-text text-center'>{$musica['nome_musica']}</p>
                                    <p class='card-text text-center'>{$musica['nome_artista']}</p> ";
                                    
                                    if($_SESSION['idUser'] == $_SESSION['id_user']){
                                       echo "<a href='../functionsPHP/processamentos/excluirMusicaPlaylist.php?idMsc={$musica['id_musica']}&&idPlay={$musica['id_playlist']}&&idUser={$_SESSION['idUser']}' class='card-link text-danger font-weight-bold'>X excluir da playlist</a>";
                                    }
                    

                    echo "       </div>
                            </div>
                        </div>
                    ";
                }

            ?>
        
        </div>

<?php 

    


?>

<?php include_once "../template/rodape.php"; ?>