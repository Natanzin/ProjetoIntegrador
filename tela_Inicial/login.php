<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Tela de login</h1>
    <?php 
        $login = $_POST['user'];
        $senha = md5($_POST['password']);

        $conexao = new PDO('mysql:host=localhost;dbname=projetointegrador;charset=utf8','root','');
        $sql = "SELECT * FROM usuarios WHERE email_user = '$login' AND senha_user = '$senha'";               
        $conexao->query($sql);
        
                
    ?>
</body>
</html>