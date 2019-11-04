<?php include_once "../template/cabecalho.php"; ?>

    <h2>Gêneros</h2>
    <a href="../functionsPHP/new_genero.php" class="btn btn-outline-success">Novo gênero</a>
    <br><br>
    <h3 class="border-bottom">Todos os gêneros...</h3>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">NOME</th>
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
                        <td scope='row'>{$genero['nome_genero']}</td>
                        <td style='text-align: right;'><a class='card-link' href=''>músicas</a></td>
                    </tr>
                ";
            }
            
            ?>
            

        </tbody>
    </table>

<?php include_once "../template/rodape.php"; ?>