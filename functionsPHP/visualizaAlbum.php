<?php include_once "../template/cabecalho.php"; ?>

    <?php 
    
        include_once "../DataBase/conexao.php";

        $idAlbum = $_GET['idAlbm'];

        $sql = "select * from album join artista on album.id_artista = artista.id_artista where id_album = '$idAlbum'";

        $result = $conexao->query($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="row">
        <div class="col" align="left">
            <a href='../telas/albuns.php' align='right' class='btn btn-primary'>Voltar</a>
            <h2>Álbum <?php echo "{$result[0]['nome']}"; ?></h2>
            <h5> <?php echo "{$result[0]['nome_artista']}"; ?></h5>

        </div>
    </div>
    <br>
    <h3 class="border-bottom">Músicas</h3>
    <div class="row" align="center">
    <?php
    
        $sqlMsc = "select * from musica join artista on musica.id_artista = artista.id_artista where id_album = '$idAlbum'";

        $resultMsc = $conexao->query($sqlMsc);
        $resultMsc = $resultMsc->fetchAll(PDO::FETCH_ASSOC);

        //echo "<pre>"; print_r($resultMsc); die;

        if($resultMsc){
            foreach($resultMsc as $msc){

                echo "
                    <div class='col'>
                        <div class='card border-primary' style='width:15rem; background: rgba(50, 153, 204, 0.3);'>
                            <iframe class='card-img-top' src='https://www.youtube.com/embed{$msc['url_musica']}' frameborder='0' 
                            allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            <div class='card-body'>
                                <p class='card-text text-center font-weight-bold'>{$msc['nome_musica']}</p>
                                <p class='card-text text-center'>{$msc['nome_artista']}</p>
                                <a href='../functionsPHP/new_Musica_playlist.php?idmsc={$msc['id_musica']}&&nomemsc={$msc['nome_musica']}' class='card-link font-weight-bold'>+ incluir na playlist</a>
                            </div>
                        </div>
                    </div>
                ";
            }

            echo "</div>";
        }else{
            echo "
            <div class='col text-center'>
            <br>
                Nenhuma música adicionada ao álbum! <br>
                <a href='../telas/albuns.php' align='right' class='btn btn-primary'>Voltar</a>
            <br><br>
            </div>
        ";
        }



    ?>


<?php include_once "../template/rodape.php"; ?>