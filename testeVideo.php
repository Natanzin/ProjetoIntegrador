<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste de música</title>
</head>
<body>
    <?php 
        $musicas = [
            'Jtler_CFqHI',
            '_dgdBjlMXMA',
            'HR4ZxjGQGYY',
            '51lOFuCR7dE',
            '5iUoik-9hVI'
        ];

        foreach($musicas as $musica){
            echo "<iframe width='500' height='255' src='https://www.youtube.com/embed/$musica' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe><br>";
        }
    ?>
    <hr>
</body>
</html>