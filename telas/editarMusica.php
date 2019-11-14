<?php

    include_once "../template/cabecalho.php";
    $idMsc = $_GET['id'];
    include_once "../DataBase/conexao.php";

    $sql = "select * from musica where id_musica = '$idMsc'";
    $musica = $conexao->query($sql);
    $musica = $musica->fetchAll(PDO::FETCH_ASSOC);
    //echo "<pre>"; print_r($musica); die;

?>

<div class="row">
    <div class="col text-center border-right" align="left">
    <form class="form-group" action="" method="POST">
        <label class="font-weight-bold" for="nome">Nome da música</label>
        <input class="form-control" type="text" name="nome" id="nome"  value="<?php echo $musica[0]['nome_musica']; ?>">
        <label class="font-weight-bold" for="nome">URL da música</label>
        <input class="form-control" type="url" name="url" id="url"  value="https://youtu.be<?php echo $musica[0]['url_musica']; ?>">  <br>
        <input class="btn btn-success" type="submit" value="Alterar">  
    </form>
    </div>
    <div class="col text-center" align="right">
        <h2>Amostra do vídeo</h2> <br>

        <iframe width="560" height="315" src="https://www.youtube.com/embed<?php echo $musica[0]['url_musica']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
</div>

<?php include_once "../template/rodape.php"; ?>