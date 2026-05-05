<?php

    if(isset($_POST['submit'])){
        include_once('../config.php');

        $nome_fantasia = $_POST['nome_fantasia'];
        $razao_social = $_POST['razao_social'];
        $cnpj = $_POST['cnpj'];
        $email_empresa = $_POST['email_empresa'];
        $senha_empresa = $_POST['senha_empresa'];
        $termos_aceitos_empresa = $_POST['termos_aceitos_empresa'];

        $result = mysqli_query($conexao, "INSERT INTO usuariosempresas(nome_fantasia,razao_social,cnpj,email_empresa,senha_empresa,termos_aceitos_empresa) VALUES ('$nome_fantasia','$razao_social','$cnpj','$email_empresa','$senha_empresa','$termos_aceitos_empresa')");

        header('Location: entrarEmpresa.html');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckCar</title>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/mediaQueries.css">
</head>
<body>
    
    <header>
        <nav>
            <a href="../index.html"><img src="../assets/icons/checkCarLogo.png" class="logoCheckCar" alt="CheckCar"></a>
            <ul class="navLinks">
                <li><a href="paginaIndisponivel.html">Sobre</a></li>
                <li><a href="paginaIndisponivel.html">Contato</a></li>
                <li><a href="paginaIndisponivel.html">Privacidade</a></li>
            </ul>
        </nav>
    </header>
        
    <form action="cadastrarEmpresa.php" method="POST" class="container">
        <fieldset class="signUpContainer">
            <h2 class="top">Dados da Empresa</h2>
            <div class="middle">
                <input type="text" name="nome_fantasia" id="nome_fantasia" class="input" placeholder="Nome Fantasia" required>
                <input type="text" name="razao_social" id="razao_social" class="input" placeholder="Razão Social" required>
                <input type="text" name="cnpj" id="cnpj" class="input" placeholder="CNPJ" required>
                <input type="email" name="email_empresa" id="email_empresa" class="input" placeholder="E-mail" required>
                <input type="password" name="senha_empresa" id="senha_empresa" class="input" placeholder="Senha" required>
                <div class="check">
                    <input type="checkbox" name="termos_aceitos_empresa" id="termos_aceitos_empresa" value="1" required>
                    <label for="termos_aceitos_empresa">Eu concordo com os <a href="paginaIndisponivel.html">Termos e Condições</a></label>
                </div>
            </div>
            <div class="bottom">
                    <button type="submit" name="submit" class="btn1">Criar Conta</button>
                    <p>Já possui conta? <a href="entrarEmpresa.html">Entre aqui</a></p>
            </div>
        </fieldset>
    </form>
</body>
</html>