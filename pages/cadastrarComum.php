<?php

    if(isset($_POST['submit'])){
        include_once('../config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $termos_aceitos = $_POST['termos_aceitos'];
        
        $result = mysqli_query($conexao, "INSERT INTO usuarioscomuns(nome,email,senha,termos_aceitos) VALUES ('$nome','$email','$senha','$termos_aceitos')");

        header('Location: entrarComum.html');

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

    <form action="cadastrarComum.php" method="POST" class="container">
        <fieldset class="signUpContainer">
            <h2 class="top">Dados do Usuário</h2>
            <div class="middle">
                <input type="text" name="nome" id="nome" class="input" placeholder="Nome" required>
                <input type="email" name="email" id="email" class="input" placeholder="E-mail" required>
                <input type="password" name="senha" id="senha" class="input" placeholder="Senha" required>
                <div class="check">
                    <input type="checkbox" name="termos_aceitos" id="termos_aceitos" value="1" required>
                    <label for="termos_aceitos">Eu concordo com os <a href="paginaIndisponivel.html">Termos e Condições</a></label>
                </div>
            </div>

            <div class="bottom">
                <button type="submit" name="submit" class="btn1">Criar Conta</button>
                <p>Já possui conta? <a href="entrarComum.html">Entre aqui</a></p>
            </div>


        </fieldset>

    </form> 
</body> 
</html>