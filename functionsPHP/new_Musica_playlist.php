<?php include_once "../template/cabecalho.php"; ?>

<?php 

    $_SESSION['id_msc'] = $_GET['idmsc'];
    $nome = $_GET['nomemsc'];

    //echo $_SESSION['id_msc']; die;
    //echo $nome; die;
?>

    <h2 class="text-center">Escolha uma playlist para adicionar a música</h2>
    <h4 class="text-center"><?php echo $nome; ?></h4>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr">
            <th style="width: 2em;" scope="col" class="text-left">AÇÃO</th>
            <th scope="col" class="text-center">NOME</th>            
            </tr>
        </thead>
        <tbody>

            <?php 
            
                include_once "../DataBase/conexao.php";

                $user = $_SESSION['id_user'];

                $sqlIndv = "select * from playlist where id_usuario = '$user' order by nome_playlist asc";

                $playlists = $conexao->query($sqlIndv);
                $playlists = $playlists->fetchAll(PDO::FETCH_ASSOC);

                //echo "<pre>"; print_r($playlists); die;

                foreach($playlists as $playlist){
                    echo "
                    <tr>
                        <td class='text-left'><a class='card-link btn btn-primary' href='processamentos/inserirMusicaPlaylist.php?idplay={$playlist['id_playlist']}'>Selecionar</a></td>
                        <td class='text-center'>{$playlist['nome_playlist']}</td>
                    </tr>
                ";
                }
            
            ?>
            

        </tbody>
    </table>

    <hr>
    <div class="text-center">
        <h4> + Criar nova playlist</h4>
        <a href="new_playlists.php" class="btn btn-outline-success">Nova playlist</a>
    </div>    

<?php include_once "../template/rodape.php"; ?>