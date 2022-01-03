<?php

    if (isset($_POST['submit'])) {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nick = $_POST['nick'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $zap = $_POST['zap'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nick,senha,email,zap) 
        VALUES ('$nick','$senha','$email','$zap')");

        header('Location: login.php');
    
           
       
    }

?>


<!DOCTYPE html>
<html lang="pt-Br">
<head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="IE=7">
                    <link rel="stylesheet" href="estilo/index.css" id="223"> 
                    
                    <link rel="shortcut icon" href="img/icone1.png" type="image/x-icon">
                    <!--Id: 223 head link css index-->

                    <title>Portal - HB</title>


                    <style>
                        body{
                        background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
                        }
                    </style>
</head>
<body>
            <!--Contém todo o Conteúdo class = "Content"-->
            <div class="content">
                            <header>
                              <img src="img/sdulogo.svg" alt="Logo">
                                <h1>Portal HB</h1>
                            </header>
                            <main>
                                <form action="formulario.php" method="POST">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Seu Nick..." id="text" name="nick" required>
                                                    <label for="text">
                                                        <img src="./img/avatar.svg" alt="Usuário do Habbo" >
                                                    </label>
                                                </div>
                                                <div class="input-field">
                                                    <input type="email" placeholder="Seu email..." id="email" name="email" required>
                                                    <label for="email">
                                                        <img src="./img/avatar.svg" alt="Email" >
                                                    </label>
                                                </div>
                                                <div class="input-field">
                                                    <input type="tel" placeholder="Seu zap..." id="zap" name="zap" required>
                                                    <label for="zap">
                                                        <img src="./img/avatar.svg" alt="zap" >
                                                    </label>
                                                </div>
                                                <div class="input-field">
                                                                <input type="password" placeholder="Senha" id="password" name="senha" required>
                                                                <label for="password">
                                                                    <img src="./img/lock.svg" alt="Senha">
                                                                </label>
                                                </div>
                                                
                                                <input type="submit" value="Cadastrar" class="btn" name="submit">
                                </form>
                            </main>
                            <footer>
                                        <span><a href="login.php">Já tem uma conta?</a></span>
                                        <a href="login.php">Entrar</a>
                            </footer>
            </div>
</body>
</html>