<?php 

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'checkcar';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_error){
    //     echo "erro de conexão";
    // }

    // else{
    //     echo "conexão efetuada com sucesso";
    // }

?>