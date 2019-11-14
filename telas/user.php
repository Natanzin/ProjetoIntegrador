<?php include_once "../template/cabecalho.php"; ?>

    <?php
        /*echo $_SESSION['nome'];
        echo $_SESSION['sobrenome'];
        echo $_SESSION['email'];
        echo $_SESSION['sexo'];
        echo $_SESSION['nascimento'];
        echo $_SESSION['senha'];*/
    ?>
    <div class="text-center">
    <br><br>
        <h2>Informações do usuário</h2><br>

        <h4>Nome: <?php echo $_SESSION['nome'] . " " . $_SESSION['sobrenome']; ?></h4>
        <h4>Email: <?php echo $_SESSION['email'];?></h4>
        <h4>Sexo: <?php echo $_SESSION['sexo'];?></h4>
        <br><br>
        <a  class="btn btn-primary" href="alterarUser.php">Editar perfil</a>&nbsp;|
        <a  class="btn btn-primary" href="alterarSenha.php">Editar senha</a>
    </div>

<?php include_once "../template/rodape.php"; ?>