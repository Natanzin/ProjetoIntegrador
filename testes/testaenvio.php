<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste de video</title>
</head>
<body>
    <h2>Testando formatação de URL</h2>
<?php 
    $url = $_POST['url'];

    $urlTratada = strrchr($url,'/');
    
    echo "URL original: $url <br>
        URL tratada: $urlTratada <br><hr>";

    echo "<iframe width='500' height='255' src='https://www.youtube.com/embed$urlTratada' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
?>
</body>
</html>
