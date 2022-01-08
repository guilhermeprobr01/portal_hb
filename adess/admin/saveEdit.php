<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nick = $_POST['nick'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $zap = $_POST['zap'];
   
        
        $sqlInsert = "UPDATE usuarios 
        SET nick='$nick',senha='$senha',email='$email',zap='$zap'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>