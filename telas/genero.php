<?php include_once "../template/cabecalho.php"; ?>

    <h2>Gêneros</h2>
    <a href="../functionsPHP/new_genero.php" class="btn btn-outline-success">Novo gênero</a>
    <br><br>
    <h3 class="border-bottom">Todos os gêneros...</h3>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col" style='text-align: center;'>NOME</th>
            <th scope="col" style='text-align: right;'>AÇÃO</th>
            </tr>
        </thead>
        <tbody>

            <?php 
            
            include_once "../DataBase/conexao.php";

            $sql = "select * from genero order by nome_genero asc";

            $result = $conexao->query($sql);
            $result = $result->fetchAll(PDO::FETCH_ASSOC);
            //echo "<pre>", print_r($result); die;
            foreach($result as $genero){
                echo "
                    <tr>
                        <td scope='row' style='text-align: center;'>{$genero['nome_genero']}</td>
                        <td style='text-align: right;'><a class='card-link btn btn-primary' href='musica_genero.php?id={$genero['id_genero']}'>músicas</a></td>
                    </tr>
                ";
            }
            
            ?>
            

        </tbody>
    </table>

<?php include_once "../template/rodape.php"; ?>