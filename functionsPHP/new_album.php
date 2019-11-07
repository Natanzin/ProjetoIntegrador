<?php include_once "../template/cabecalho.php"; ?>
    <a href="../telas/albuns.php" class="btn btn-primary">Voltar</a><br><br>
    <h2 class="border-top">Inserir novo álbum</h2>
    <form action="processamentos/inserirAlbum.php" method="POST">
    
        <div class="form-group">
            <label for="name_album">Nome do álbum</label>
            <input type="text" class="form-control" name="nomeAlbum" id="name_album" autofocus required>
        </div>
        <div class="form-group">
            <label for="ano_album">Ano de lançamento</label>
            <input type="number" name="anoAlbum" class="form-control" id="ano_album" required>
        </div>
        <div class="form-group">
            <label for="artista_msc">Artista</label>
            <select class="form-control" name="artista" id="artista_msc">
                <option value="">Artista</option>
                <?php 
                include_once "../DataBase/conexao.php";
                    $sqlArtista = "select * from artista order by nome_artista asc";

                    $artistas = $conexao->query($sqlArtista);
                    $artistas = $artistas->fetchAll(PDO::FETCH_ASSOC);

                    //echo "<pre>"; print_r($resultado); die;

                    foreach($artistas as $artista){
                        echo "<option required value='{$artista['id_artista']}'>{$artista['nome_artista']}</option>";
                    }
                ?>
            </select>
        </div>
        <input class="btn btn-success" type="submit" value="Cadastrar">
        
    </form>

<?php include_once "../template/rodape.php"; ?>