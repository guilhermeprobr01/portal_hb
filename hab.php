<?php
function getInfo($user) {
    $url = 'https://www.habbo.com.br/api/public/users?name='.$user;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36');
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, true);
    $result = curl_exec($ch);
    curl_close($ch); 

    $json = json_decode($result, true);
    return $json['motto'];
}

$missao = "Sou um teste";
$resultado = null;

if($_POST) {
    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $mottoUser = getInfo($user);

    if($missao == $mottoUser) {
        $resultado = '<hr />Missão Confirmada';
    } else {
        $resultado = "<hr />Missão não Confirmada";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Missão</title>
</head>

<body>
    Coloque a seguinte missão: <b><?php echo $missao; ?></b><br>

    Checar missão:<br>
    <form action="" method="POST">
        <label for="user">User: </label>
        <input type="text" name="user"><br>
        <input type="submit" value="Checar">
    </form>

    <?php echo $resultado; ?>
</body>
</html>