<?php include_once "../template/cabecalho.php"; ?>

    <h2>Playlists</h2>
    <a href="../functionsPHP/new_playlists.php" class="btn btn-outline-success">Nova playlist</a>
    <br><br>
    <h3 class="border-top">Suas playlists...</h3>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col" class="text-left">MUSICAS</th>
            <th scope="col" class="text-center">NOME</th>            
            <th scope="col" class="text-right">AÇÃO</th>            
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
                        <td class='text-left'><a class='card-link btn btn-primary' href='musica_playlist.php?id={$playlist['id_playlist']}'>escutar</a></td>
                        <td class='text-center'>{$playlist['nome_playlist']}</td>
                        <td class='text-right'><a class='card-link btn btn-danger' href='../functionsPHP/processamentos/excluirPlaylist.php?id={$playlist['id_playlist']}'>Excluir</a></td>
                    </tr>
                ";
                }
            
            ?>
            

        </tbody>
    </table>

    <br><br>
    <h3 class="border-top">Todas as playlists...</h3>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr">
            <th style="width: 2em;" scope="col" class="text-left">MUSICAS</th>
            <th scope="col" class="text-center">NOME</th>            
            </tr>
        </thead>
        <tbody>

            <?php 
            
                include_once "../DataBase/conexao.php";

                $sql = "select * from playlist order by nome_playlist asc";

                $td_playlists = $conexao->query($sql);
                $td_playlists = $td_playlists->fetchAll(PDO::FETCH_ASSOC);

                //echo "<pre>"; print_r($playlists); die;

                foreach($td_playlists as $playlist){
                    echo "
                    <tr>
                        
                        <td class='text-left'><a class='card-link btn btn-primary' href='musica_playlist.php?id={$playlist['id_playlist']}'>escutar</a></td>
                        <td class='text-center'>{$playlist['nome_playlist']}</td>
                    </tr>
                ";
                }
            
            ?>
            

        </tbody>
    </table>

<?php include_once "../template/rodape.php"; ?>