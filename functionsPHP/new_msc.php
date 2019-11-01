<?php include_once "../template/cabecalho.php"; ?>
<?php include_once "../DataBase/conexao.php"; ?>
    <a href="../telas/musicas.php" class="btn btn-primary">Voltar</a><br><br>
    <h2 class="border-top">Inserir nova música</h2>
    <form action="">
    
        <div class="form-group">
            <label for="name_msc">Nome da música</label>
            <input type="text" class="form-control" id="name_msc" autofocus required>
        </div>
        <div class="form-group">
            <label for="url_msc">URL</label>
            <input type="url" class="form-control" id="url_msc" required>
        </div>
        <div class="form-group">
            <label for="genero_msc">Gênero</label>
            <select name="genero" id="genero_msc">
                <option value="">Selecione</option>
                
                <?php 
                    $sqlGenero = "select * from genero order by nome_genero asc";

                    $generos = $conexao->query($sqlGenero);
                    $generos = $generos->fetchAll(PDO::FETCH_ASSOC);

                    //echo "<pre>"; print_r($resultado); die;

                    foreach($generos as $genero){
                        echo "<option required value='{$genero['id_genero']}'>{$genero['nome_genero']}</option>";
                    }
                ?>

            </select>            
        </div>
        <div class="form-group">
            <label for="artista_msc">Artista</label>
            <select name="artista" id="artista_msc">
                <option value="">Selecione</option>

                <?php 
                    $sqlArtista = "select * from artista order by nome_artista asc";

                    $artistas = $conexao->query($sqlArtista);
                    $artistas = $artistas->fetchAll(PDO::FETCH_ASSOC);

                    foreach($artistas as $artista){
                        echo "<option required value='{$artista['id_artista']}'>{$artista['nome_artista']}</option>";
                    }
                ?>

            </select>
        </div>
        <div class="form-group">
            <label for="album_msc">Álbum</label>
            <select name="" id="album_msc">
                <option value="">Selecione</option>

                <?php 
                    $sqlAlbum = "select * from album order by nome asc";

                    $albuns = $conexao->query($sqlAlbum);
                    $albuns = $albuns->fetchAll(PDO::FETCH_ASSOC);

                    foreach($albuns as $album){
                        echo "<option required value='{$album['id_album']}'>{$album['nome']}</option>";
                    }
                ?>

            </select>
        </div>
        <input class="btn btn-success" type="submit" value="Cadastrar">
        
    </form>

<?php include_once "../template/rodape.php"; ?>