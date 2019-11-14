<?php include_once "../template/cabecalho.php"; ?>
    <a href="user.php" class="btn btn-primary">Voltar</a>
        
        <br>
        <h3 class="text-center">Alterar informações de usuário</h3>
        <br><br>
        <form action="../functionsPHP/processamentos/alterarUser.php" class="form-group" method="POST">
            <label class="font-weight-bold" for="">Nome</label>
            <input class="form-control" type="text" value="<?php echo $_SESSION['nome']; ?>" name="nome" id="nome"><br>
            <label class="font-weight-bold" for="">Sobrenome</label>
            <input class="form-control" type="text" value="<?php echo $_SESSION['sobrenome']; ?>" name="sobrenome" id="sobrenome"><br>
            <label class="font-weight-bold" for="">E-mail</label>
            <input class="form-control" type="email" value="<?php echo $_SESSION['email']; ?>" name="email" id="email"><br>
            <input class="btn btn-success" type="submit" value="Alterar">
        </form>

<?php include_once "../template/rodape.php"; ?>