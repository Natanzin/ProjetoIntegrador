<?php include_once "../template/cabecalho.php"; ?>

    <h2>Artistas</h2>
    <a href="../functionsPHP/new_artista.php" class="btn btn-outline-success">Novo artista</a>
    <br><br>
    <h3 class="border-bottom">Todos os artistas...</h3>

    <?php

        include_once "../DataBase/conexao.php";

        $sql = "select * from artista";

        $artistas = $conexao->query($sql);        
        $artistas = $artistas->fetchAll(PDO::FETCH_ASSOC);

      //echo "<pre>", print_r($artistas); die;

        echo "<div class='row' align='center'>";

        foreach($artistas as $artista){
            echo "
                <div class='col'>
                    <div class='card border-primary' style='width: 15rem; background: rgba(50, 153, 204, 0.3);'>
                        <img src='../functionsPHP/processamentos/upload/{$artista['foto_artista']}' class='card-img-top' style='height: 130px;' alt='{$artista['nome_artista']}' title='{$artista['nome_artista']}'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$artista['nome_artista']}</h5>
                            <a href='musica_artista.php?id={$artista['id_artista']}' class='btn btn-primary'>Musicas</a>
                        </div>
                    </div>      
                </div>
            ";
        }

        echo "</div>";

    ?>

    

<?php include_once "../template/rodape.php"; ?>