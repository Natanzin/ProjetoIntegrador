<?php include_once "../template/cabecalho.php"; ?>

    <!--Mostrar as músicas de cada gênero!-->
    <?php

        $idGnr = $_GET['id'];

        $sql = "select * from musica m join artista a on m.id_artista = a.id_artista join genero g on m.id_genero = g.id_genero where m.id_genero = '$idGnr' order by nome_musica asc";
        
        include_once "../DataBase/conexao.php";

        $musicas = $conexao->query($sql);
        $musicas = $musicas->fetchAll(PDO::FETCH_ASSOC);

        //echo "<pre>"; print_r($musicas); die;

        if(!$musicas){
            echo "
            <div class='col text-center'>
            <br>
                Nenhuma música adicionada ao gênero! <br>
                <a href='genero.php' align='right' class='btn btn-primary'>Voltar</a>
            <br><br>
            </div>
            ";
        }else{
            echo "
            <a href='genero.php' class='btn btn-primary'>Voltar</a><br>
            <div class='col text-center border-bottom'>
                <br><h2>{$musicas[0]['nome_genero']}</h2>
            </div>
            <br>
            <div class='row' align='center'>
            ";

            foreach($musicas as $musica){
                echo "
                    <div class='col'>
                        <div class='card border-primary' style='width:15rem; background: rgba(50, 153, 204, 0.3);'>
                            <iframe class='card-img-top' src='https://www.youtube.com/embed{$musica['url_musica']}' frameborder='0' 
                            allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            <div class='card-body'>
                                <p class='card-text text-center'>{$musica['nome_musica']}</p>
                                <p class='card-text text-center'>{$musica['nome_artista']}</p>
                                <a href='../functionsPHP/new_Musica_playlist.php?idmsc={$musica['id_musica']}&&nomemsc={$musica['nome_musica']}' class='card-link font-weight-bold'>+ incluir na playlist</a>
                            </div>
                        </div>
                    </div>
                ";
            }

            echo "</div>";//ens div.row
        }

    ?>

<?php include_once "../template/rodape.php"; ?>