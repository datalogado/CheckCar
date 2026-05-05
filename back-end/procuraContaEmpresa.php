<?php
    session_start();

    if(isset($_POST['submit'])){
        include_once('../config.php');

        $cnpj = $_POST['cnpj'];
        $senha_empresa = $_POST['senha_empresa'];

        $sql = "SELECT * FROM usuariosempresas WHERE cnpj = '$cnpj' and senha_empresa = '$senha_empresa'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) > 0){
            $_SESSION['cnpj'] = $cnpj;
            $_SESSION['senha_empresa'] = $senha_empresa;
            header('Location: ../pages/telaPrincipalEmpresa.php');

        } else{
            unset($_SESSION['cnpj']);
            unset($_SESSION['senha_empresa']);
            header('Location: ../pages/entrarEmpresa.html');
        }
    }
