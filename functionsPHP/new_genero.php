<?php include_once "../template/cabecalho.php"; ?>
    <a href="../telas/genero.php" class="btn btn-primary">Voltar</a><br><br>
    <h2 class="border-top">Inserir novo gênero</h2>
    <form action="processamentos/inserirGenero.php" method="POST">
    
        <div class="form-group">
            <label for="name_genero">Nome</label>
            <input type="text" required class="form-control" id="name_genero" name="new_genero" autofocus>
        </div>
        
        <input class="btn btn-success" type="submit" value="Cadastrar">
        
    </form>

<?php include_once "../template/rodape.php"; ?>