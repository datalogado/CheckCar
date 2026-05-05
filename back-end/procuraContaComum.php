<?php
    session_start();

    if(isset($_POST['submit'])){
        include_once('../config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarioscomuns WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) > 0){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../pages/telaPrincipalComum.php');

        } else{
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../pages/entrarComum.html');
        }
    }
