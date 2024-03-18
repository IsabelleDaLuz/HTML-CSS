<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Bem vindo</h1>
    <?php 
        $nome = $_GET["nome"];
        $tel = $_GET["tel"];
        $email = $_GET["email"];
        print "Seja bem vindo $nome <br> Seu telefone é $tel <br> Seu e-mail é $email";
    ?>
</body>
</html>