<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" id="223"> 
    <link rel="shortcut icon" href="img/icone1.png" type="image/x-icon">
    <title>Tela de login</title>
  
        <style>
            body{
                background-color: rgb(58, 58, 58);
            }
            .top:hover{
                    color: blue;
            }
        </style>
</head>
<body>
       

    <div class="content">
                            <header>
                              <img src="img/sdulogo.svg" alt="Logo">
                                <h1>Portal HB</h1>
                            </header>
                            <main>
                            <form  action="testLogin.php" method="POST">
                                                <div class="input-field">
                                                    <input type="text" name="email" placeholder="Nick" required>
                                                    <label for="Nick">
                                                        <img src="./img/avatar.svg" alt="Usuário do Habbo" >
                                                    </label>
                                                </div>
                                                <div class="input-field">
                                                                <input type="password" name="senha" placeholder="Senha" required>
                                                                <label for="password">
                                                                    <img src="./img/lock.svg" alt="Senha">
                                                                </label>
                                                </div>
                                                <div class="check">
                                                                <input type="checkbox" checked id="remind-pass" >
                                                                <label for="remind-pass">Lembrar Senha</label>
                                                </div>
                                                <input class="btn" type="submit" name="submit" value="Enviar">
                                </form>
                            </main>
                            <footer>
                                        <span><a href="ajuda">Esqueci minha senha</a></span>
                                        <a href="formulario">Criar Conta</a>
                                        
                            </footer>
                            <p style="text-align: center;padding-top: 13px;
     color: white;
     font-size: 14px;
     font-family: Poppins;">
                    <a href="ajuda" style="text-decoration: none;
     outline: none;
     color: rgb(110, 117, 162);
      ">Problemas para entrar? Clique aqui.</a>
                </p>
            </div> 
            

            
</body>
</html>