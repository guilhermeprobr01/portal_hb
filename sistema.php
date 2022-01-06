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

    // Função para pegar o nome de usuário logado
    function getUser() {
        global $conexao;

        $result = $conexao->query("SELECT * FROM usuarios WHERE email = '".$_SESSION['email']."'")->fetch_assoc();
        return ucfirst($result['nick']);

        //obs: ucfirst() deixa a primeira letra maiuscula.
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icone1.png" type="image/x-icon">
    <link rel="stylesheet" href="sistema.css">

    <title>Portal - HB</title>
   
</head>


<body id="body-pd">






        <div class="l-navbar" id="navbar">
                <nav class="nav">
                        <div>
                            <div class="nav__brand">
                                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                                    <a href="#" class="nav__logo">Portal - HB</a>
                            </div>
                            <div class="nav__list">
                                <a href="#" class="nav__link">
                                <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Dashboard</span>
                                </a>

                                <div class="nav__link  collapse">
                                <ion-icon name="layers-outline" class="nav__icon"></ion-icon>
                                <span class="nav__name">Departamentos</span>

                                <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                                <ul class="collapse__menu">
                                        <a href="sub_pg/policia.php" class="collapse__sublink" target="kas">Polícia</a>
                                        <a href="sub_pg/hospital.php" class="collapse__sublink" target="kas">Hospital</a>
                                        <a href="sub_pg/org.php" class="collapse__sublink" target="kas">Org.</a>
                                        <a href="sub_pg/habbo.php" class="collapse__sublink" target="kas">Habbo</a>

                                </ul>

                                </div>
                                


                                <a href="#" class="nav__link">
                                <ion-icon name="code-slash-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Sugerir</span>
                                </a>


                                <div class="nav__link collapse">
                                <ion-icon name="newspaper-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Entretenimento</span>

                                <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                                        <ul class="collapse__menu">
                                        <a href="sub_pgl/pes.php" class="collapse__sublink" target="kas">Pesquisas</a>
                                        <a href="sub_pgl/pod.php" class="collapse__sublink" target="kas">Podcast</a>
                                        <a href="sub_pgl/mu.php" class="collapse__sublink" target="kas">Música</a>
                                        <a href="sub_pgl/vir.php" class="collapse__sublink" target="kas">Vídeos</a>
                                        <a href="sub_pgl/sortei.php" class="collapse__sublink" target="kas">Sorteios</a>
                                </ul>
                                   
                                </div>


                                  <a href="#" class="nav__link">
                                  <ion-icon name="person-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Perfil</span>
                                </a>

                                
                                  <div class="yu"><a href="sair.php" class="nav__link">
                                    <ion-icon name="exit-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Sair</span>
                                </a>
                                </div>
                            </div>
                        </div>
                </nav>
        </div>












<!--<div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
-->


            <h1 class="user">Bem vindo(a) de volta <?php echo getUser(); ?>!</h1>


                <!-- IFRAMES -->

            <iframe src="sub_pg/policia.php" frameborder="0" name="kas" transparency="true" scrolling="no" frameborder="0"></iframe>
            

            <!-- ===== IONICONS ===== -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

            <!-- ==== MAIN JS ==== -->
            <script src="sistema.js"></script>
</body>
</html>