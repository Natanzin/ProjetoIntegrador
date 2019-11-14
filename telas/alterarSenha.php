<?php include_once "../template/cabecalho.php"; ?>

    <h2 class="text-center">Alterar senha</h2><br><br>
    <form action="../functionsPHP/processamentos/alterarSenha.php" method="POST">
        <label class="font-weight-bold" for="">Senha atual</label>
        <input class="form-control" type="password" name="senhaAntiga" id="">
        <hr>
        <label class="font-weight-bold" for="">Nova Senha</label>
        <input class="form-control" type="password" name="novaSenha" id="">
        <label class="font-weight-bold" for="">Confirmar senha</label>
        <input class="form-control" type="password" name="confirmSenha" id=""><br>
        <input class="btn btn-success" type="submit" value="Alterar">
    </form>

<?php include_once "../template/rodape.php"; ?>