<?php include_once "../template/cabecalho.php"; ?>
    <a href="../telas/artistas.php" class="btn btn-primary">Voltar</a><br><br>
    <h2 class="border-top">Novo artista</h2>
    <form action="">
        <div class="form-group">
            <label for="name_artista">Nome</label>
            <input type="text" class="form-control" id="name_artista">
        </div>
        <div class="form-group">
            <label for="foto_artista">Foto</label>
            <input type="file" class="form-control" id="foto_artista">
        </div>
        <input class="btn btn-success" type="submit" value="Cadastrar">
    </form>

<?php include_once "../template/rodape.php"; ?>