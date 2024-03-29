<?php include_once "../template/cabecalho.php"; ?>
<?php include_once "../DataBase/conexao.php"; ?>
    <a href="../telas/musicas.php" class="btn btn-primary">Voltar</a><br><br>
    <h2 class="border-top">Inserir nova música</h2>
    <form action="processamentos/inserirMusica.php" method="POST">
    
        <div class="form-group">
            <label for="name_msc">Nome da música</label>
            <input type="text" name="nome_msc" class="form-control" id="name_msc" max="60" placeholder="máximo 60 caracteres" autofocus required>
        </div>
        <div class="form-group">
            <label for="url_msc">URL</label>
            <input type="url" name="url_msc" class="form-control" id="url_msc" placeholder="URL do youtube" required>
        </div>
        <div class="form-group">
            <label for="genero_msc">Gênero</label>
            <select class="form-control" name="gnr_msc" id="genero_msc">
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
            <select class="form-control" name="art_msc" id="artista_msc">
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
            <select class="form-control" name="alb_msc" id="album_msc">
                <option value="">Selecione</option>
                <!--Insere o json-->
            </select>
        </div>
        <input class="btn btn-success" type="submit" value="Cadastrar">
        
    </form>

    <script>
    $(function(){
        $('#artista_msc').change(function(){
            $.ajax({
                url: 'processamentos/procuraAlbum.php?id=' + $('#artista_msc').val(),
                dataType: 'json',
                success: function(dados){
                    
                        $('#album_msc').html('<option value="">Selecione</option>');

                        dados.forEach(function(obj){
                            $('#album_msc').append(
                                '<option value="' + obj.id_album + '">' + obj.nome + '</option>'
                            );
                        });
                    
                }
            });
        });
    });
        
    </script>

<?php include_once "../template/rodape.php"; ?>