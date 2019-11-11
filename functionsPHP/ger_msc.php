<?php include_once "../template/cabecalho.php"; ?>

<a href="../telas/musicas.php" class="btn btn-primary">Voltar</a><br><br>
    <h2 class="border-bottom">Gerenciar músicas</h2>

                <?php 
                    include_once "../DataBase/conexao.php";

                    $sqlMusica = "select musica.id_musica, musica.nome_musica, musica.url_musica, musica.id_genero, musica.id_usuario, musica.id_album, artista.nome_artista
                    from musica inner join artista on artista.id_artista = musica.id_artista where id_usuario = '{$_SESSION['id_user']}' order by musica.nome_musica";

                    $msc = $conexao->query($sqlMusica);
                    $msc = $msc->fetchAll(PDO::FETCH_ASSOC);

                    //echo"<pre>"; print_r($msc); die;

                    if(!$msc){
                        echo "
                            <div class='col text-center'>
                            <br>
                                <h2>Você não cadastrou nenhuma música!</h2> <br>
                            </div>
                        ";
                    }else{
                        echo "
                            <table class='table table-hover'>
                                <thead class='thead-dark'>
                                    <tr>
                                        <th class='text-left'>Nome da música</th>
                                        <th class='text-left'>Artista</th>
                                        <th class='text-right'>Ações</th>
                                    </tr>
                                </thead>
                            <tbody class='table-sm'>
                        ";
                        foreach($msc as $musica){
                            echo "
                            <tr>
                                <td>{$musica['nome_musica']}</td>
                                <td>{$musica['nome_artista']}</td>
                                <td class='text-right'>
                                    <a href='processamentos/excluirMusica.php&id={$musica['id_musica']}' class='btn btn-warning btn-sm'>Editar</a>
                                    <a href='processamentos/editarMusica.php&id={$musica['id_musica']}' class='btn btn-danger btn-sm'>Excluir</a>
                                </td>
                            </tr>                     
                            ";
                        }
                    }

                ?>
        </tbody>
    </table>

<?php include_once "../template/rodape.php"; ?>