<?php include_once "../template/cabecalho.php"; ?>

    <h2>Playlists</h2>
    <a href="../functionsPHP/new_playlists.php" class="btn btn-outline-success">Nova playlist</a>
    <br><br>
    <h3 class="border-top">Suas playlists...</h3>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col">NOME</th>
            <th scope="col" style='text-align: right;'>MUSICAS</th>            
            <th scope="col" style='text-align: right;'>AÇÕES</th>            
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
                        <td scope='row'>{$playlist['nome_playlist']}</td>
                        <td style='text-align: right;'><a class='card-link' href=''>escutar</a></td>
                        <td style='text-align: right;'><a class='card-link' href=''>Excluir</a></td>
                    </tr>
                ";
                }
            
            ?>
            

        </tbody>
    </table>

    <h3 class="border-top">Todas as playlists...</h3>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col">NOME</th>
            <th scope="col" style='text-align: right;'>MUSICAS</th>            
            <th scope="col" style='text-align: right;'>AÇÕES</th>            
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
                        <td scope='row'>{$playlist['nome_playlist']}</td>
                        <td style='text-align: right;'><a class='card-link' href=''>escutar</a></td>
                        <td style='text-align: right;'><a class='card-link' href=''>Excluir</a></td>
                    </tr>
                ";
                }
            
            ?>
            

        </tbody>
    </table>

<?php include_once "../template/rodape.php"; ?>