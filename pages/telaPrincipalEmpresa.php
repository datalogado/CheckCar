<?php

    session_start();

    if((!isset($_SESSION['cnpj']) == true) and (!isset($_SESSION['senha_empresa']) == true)){
        unset($_SESSION['cnpj']);
        unset($_SESSION['senha_empresa']);
        header('Location: entrarEmpresa.html');
    }

    $logado = $_SESSION['cnpj'];

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