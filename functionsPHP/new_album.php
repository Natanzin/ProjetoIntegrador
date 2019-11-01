<?php include_once "../template/cabecalho.php"; ?>
    <a href="../telas/albuns.php" class="btn btn-primary">Voltar</a><br><br>
    <h2 class="border-top">Inserir novo álbum</h2>
    <form action="">
    
        <div class="form-group">
            <label for="name_album">Nome do álbum</label>
            <input type="text" class="form-control" id="name_album" autofocus required>
        </div>
        <div class="form-group">
            <label for="ano_album">Ano de lançamento</label>
            <input type="number" class="form-control" id="ano_album" required>
        </div>
        <div class="form-group">
            <label for="artista_msc">Artista</label>
            <select name="" id="artista_msc">
                <option value="">Artista</option>
            </select>
        </div>
        <input class="btn btn-success" type="submit" value="Cadastrar">
        
    </form>

<?php include_once "../template/rodape.php"; ?>