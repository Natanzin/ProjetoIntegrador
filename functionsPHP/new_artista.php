<?php include_once "../template/cabecalho.php"; ?>
    <a href="../telas/artistas.php" class="btn btn-primary">Voltar</a><br><br>
    <h2 class="border-top">Novo artista</h2>
    <form action="processamentos/inserirArtista.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name_artista">Nome</label>
            <input type="text" name="nome_artista" class="form-control" id="name_artista" autofocus required>
        </div>
        <div class="form-group">
            <label for="foto_artista">Foto</label>
            <input type="file" name="arquivo" class="form-control" id="foto_artista" required>
        </div>
        <input class="btn btn-success" type="submit" value="Cadastrar">
    </form>

<?php include_once "../template/rodape.php"; ?>