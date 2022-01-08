<?php

    $dbHost = 'sql111.epizy.com';
    $dbUsername = 'epiz_30722160';
    $dbPassword = 'SWIH7jIHO1';
    $dbName = 'epiz_30722160_usuarios';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName) or die;

    // if($conexao->connect_errno)
    // {r
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>