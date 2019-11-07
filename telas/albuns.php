<?php include_once "../template/cabecalho.php"; ?>
    
    <h2>Álbuns</h2>
    <a href="../functionsPHP/new_album.php" class="btn btn-outline-success">Novo álbum</a>
    <br><br>
    <h3 class="border-top">Selecione o artista para vizualizar os álbuns...</h3>

    <div class="form-group">
        <select class="form-control text-center" name="art_msc" id="artista_msc">
            <option value="">Artista</option>

            <?php 
            include_once "../DataBase/conexao.php";
                $sqlArtista = "select * from artista order by nome_artista asc";

                $artistas = $conexao->query($sqlArtista);
                $artistas = $artistas->fetchAll(PDO::FETCH_ASSOC);

                foreach($artistas as $artista){
                    echo "<option required value='{$artista['id_artista']}'>{$artista['nome_artista']}</option>";
                }
            ?>

        </select>
    </div>
    
        <div class="row" align="center" id="album_msc"><!--Insere o json--></div>            
    
    <script>
        $(function(){
            $('#artista_msc').change(function(){
                $.ajax({
                    url: '../functionsPHP/processamentos/procuraAlbum.php?id=' + $('#artista_msc').val(),
                    dataType: 'json',
                    success: function(dados){
                        
                        $('#album_msc').html('');

                        dados.forEach(function(obj){
                        
                            $('#album_msc').append(
                                '<div class="col">' +
                                    '<div class="card" style="width: 18rem;">' +
                                        '<div class="card-body">' +
                                            '<h5 class="card-title">' + obj.nome + '</h5>' +
                                            '<h6 class="card-subtitle mb-2 text-muted">' + obj.nome_artista + '</h6>' +
                                            '<a href="../functionsPHP/visualizaAlbum.php?idAlbm=' + obj.id_album + '" class="card-link">Visualizar álbum</a>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>'
                            );
                                                        
                        });
                        
                    }
                });
            });
        });
    </script>


<?php include_once "../template/rodape.php"; ?>