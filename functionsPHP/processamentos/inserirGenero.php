<?php  

include_once "../../DataBase/conexao.php";

    $nome = $_POST['new_genero'];

    //inserir genero no DB
    
        $sql = "insert into genero(nome_genero) values ('$nome');";

        $conexao->query($sql);

?>

<script>
    $(function(){
        alert('Gênero musical cadastrado com sucesso!');
        location.href='../../telas/genero.php';
    });
</script>
<div>
<?php include_once "../../template/rodape.php"; ?>
     