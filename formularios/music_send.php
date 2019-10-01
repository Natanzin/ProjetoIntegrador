<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmar envio</title>
</head>
<body>
    <h2>Confirmar envio</h2>
    <!--
        Formulário
        -nome da música(input)       name="nome_musica"
        -categoria da música(select) name="gnr_musica"
        -artista(select)             name="artista"
        -URL(input)                  name="url"
        -Playlist(select)            name="playlist"
    -->
    <?php 
        $nomeMusica = $_POST['nome_musica'];
        $categoria = $_POST['gnr_musica'];
        $artista = $_POST['artista'];
        $url = $_POST['url'];
        $playlist = $_POST['playlist'];

        //Url precisa ser tratada para recuperar apenas o ID do vídeo
        $urlTratada = strrchr($url,'/');
        
        echo "O vídeo cadastrado:<br>
        <iframe width='500' height='255' src='https://www.youtube.com/embed$urlTratada' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
        
    ?><br>
    <form action="musica_confirmada.php">
            <label for="nome_conf">Nome da música:
                <input type="text" name="nome_conf" id="nome_conf" value="<?php echo $nomeMusica ?>">
            </label><br><br>
            <label for="genero_conf">Gênero:
                <select name="artista_conf" id="artista_conf">
                    <option value="<?php echo $categoria ?>"><?php echo $categoria ?></option>
                    <?php 
                        $generos = [
                            'Classica',
                            'Funk',
                            'Gospel',
                            'Metal',
                            'Pop',
                            'Punk',
                            'Rap',
                            'Rock',
                            'Sertanejo'
                        ];

                        foreach($generos as $genero){
                            echo "<option value='$genero'>$genero</option>";
                        }
                    ?>
                </select>
            </label><br><br>
            <label for="artista_conf">Artista: 
                <input type="text" name="artista_conf" id="artista_conf" value="<?php echo $artista ?>">
            </label><br><br>
            <label for="">Playlist: 
                <select name="" id="">
                    <option value="<?php echo $playlist ?>"><?php echo $playlist ?></option>
                    <?php 
                        $playlists = [
                            'SeleçãoJR',
                            'MelhoresMusicas',
                            'PlaylistNova03'
                        ];

                        foreach($playlists as $playlist){
                            echo "<option value='$playlist'>$playlist</option>";
                        }
                    ?>
                </select>
            </label><br><br>
            <button type="submit">Confirmar Envio</button>
            <button><a href="musicas.php">Cancelar</a></button>
    </form>
</body>
</html>