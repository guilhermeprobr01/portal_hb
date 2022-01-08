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
    $logado = $_SESSION['nick'];
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    $result = $conexao->query($sql);

    // Função para pegar o nome de usuário logado
    // function getUser() {
    //     global $conexao;

    //     $result = $conexao->query("SELECT * FROM usuarios WHERE email = '".$_SESSION['email']."'")->fetch_assoc();
    //     return ucfirst($result['nick']);

    //     //obs: ucfirst() deixa a primeira letra maiuscula.
    // }
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
   


    <style>
        .lsd{
            display: flex;
            justify-content: flex-end;
            margin-top: 0px;
            margin: 1px 10px 1px 1px;
            margin-left: 20px;
            
        }
        .lsd1 {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
        h1{
            margin-top: 0px;
        }
        .play1{
            width: 16px;
            cursor: pointer;
        }
        .play2{
            width: 16px;
            cursor: pointer;
        }
   
       
    </style>
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
                                    <li class="tte">
                                        <a href="sub_pg/policia.php" class="collapse__sublink" target="kas">Polícia</a>
                                        <a href="sub_pg/hospital.php" class="collapse__sublink" target="kas">Hospital</a>
                                        <a href="sub_pg/org.php" class="collapse__sublink" target="kas">Org.</a>
                                        <a href="sub_pg/habbo.php" class="collapse__sublink" target="kas">Habbo</a>
                                        </li>
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
<audio id="audio">
				<source src="https://node-22.zeno.fm/p56794zqachvv?rj-ttl=5&amp;rj-tok=AAABfjbt7aQAVXbGx1cqY1VYSg" type="audio/ogg">
				<source src="https://node-22.zeno.fm/p56794zqachvv?rj-ttl=5&amp;rj-tok=AAABfjbt7aQAVXbGx1cqY1VYSg" type="audio/mpeg">
				Seu navegador não possui suporte ao elemento audio
			</audio>



<div class="lsd1">
            <h1 class="user">Bem vindo(a) de volta <?php echo ucfirst($_SESSION['nick']); ?>!</h1>
            <div class="lsd">
                <img src="play.png" alt="" onclick="play()" class="play1">
        
            <img src="pausa.png" alt="" onclick="pause()" class="play2">
				
            </div>
</div>

                    

                <!-- IFRAMES -->

            <iframe src="sub_pg/policia.php" frameborder="0" name="kas" transparency="true" scrolling="no" frameborder="0"></iframe>

           
            

            <!-- ===== IONICONS ===== -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

            <!-- ==== MAIN JS ==== -->
            <script src="sistema.js"></script>
            <script>
			audio = document.getElementById('audio');
			
			function play(){
				audio.play();
			}

			function pause(){
				audio.pause();
			}

			function stop(){
				audio.pause();
				audio.currentTime = 0;
			}

			function aumentar_volume(){
				if( audio.volume < 1)  audio.volume += 0.1;
			}

			function diminuir_volume(){
				if( audio.volume > 0)  audio.volume -= 0.1;
			}
			
			function mute(){
				if( audio.muted ){
					audio.muted = false;
				}else{
					audio.muted = true;
				}
			}

		</script>
</body>
</html>