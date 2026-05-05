<?php

    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: entrarComum.html');
    }

    $logado = $_SESSION['email'];

    print_r($logado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Seja bem vindo!!</p>
</body>
</html>