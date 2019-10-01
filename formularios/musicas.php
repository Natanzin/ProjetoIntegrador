<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form_músicas</title>
</head>
<body>
    <h2>Formulário para enviar músicas</h2>
    <form action="music_send.php" method="POST">
        <!--
            Formulário
            -nome da música(input)
            -categoria da música(select)
            -artista(select)
            -URL(input)
            -Playlist(select)
                -Criar um forma de adicionar nova playlist
        -->

        <label for="nome_musica">Nome da música:
            <input type="text" name="nome_musica" id="nome_musica" required>
        </label><br><br>
        <label for="gnr_musica">Gênero Musical:
            <select name="gnr_musica" id="gnr_musica">
                <option value="">Selecione</option>
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
                        echo "<option required value='$genero'>$genero</option>";
                    }
                ?>
            </select>
            
        </label><br><br>
        <label for="artista">Nome do artista:
            <input type="text" name="artista" id="artista" required>
        </label><br><br>
        <label for="url">URL do youtube:
            <input type="url" name="url" id="url" required>
        </label><br><br>
        <label for="playlist">Playlist:
            <select name="playlist" id="playlist">
                <option value="">Selecione</option>
                <?php 
                    $playlists = [
                        'SeleçãoJR',
                        'MelhoresMusicas',
                        'PlaylistNova03'
                    ];

                    foreach($playlists as $playlist){
                        echo "<option required value='$playlist'>$playlist</option>";
                    }
                ?>
            </select>
        </label><br><br>
        <input type="submit" value="Enviar">        
    </form>
</body>
</html>