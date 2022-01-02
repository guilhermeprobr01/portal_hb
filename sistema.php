<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icone1.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo/sistema.css">

    <title>Portal - HB</title>
   
</head>
<body>
    
        <div class="l-navbar" id="navbar">
                <nav class="nav">
                        <div>
                            <div class="nav__brand">
                                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                                    <a href="#" class="nav__logo">Portal - HB</a>
                            </div>
                            <div class="nav__list">
                                <a href="#" class="nav__link">

                                    <span class="nav__name"></span>
                                </a>

                                <a href="#" class="nav__link">

                                <span class="nav__name"></span>
                                </a>

                                <a href="#" class="nav__link">

                                    <span class="nav__name"></span>
                                </a>

                                <a href="#" class="nav__link">

                                    <span class="nav__name"></span>
                                </a>
                                  <a href="#" class="nav__link">

                                    <span class="nav__name"></span>
                                </a>
                                  <a href="#" class="nav__link">

                                    <span class="nav__name"></span>
                                </a>
                            </div>
                        </div>
                </nav>
        </div>












<!--<div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
-->


            <!-- ===== IONICONS ===== -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

            <!-- ==== MAIN JS ==== -->
            <script src="js/sistema.js"></script>
</body>
</html>