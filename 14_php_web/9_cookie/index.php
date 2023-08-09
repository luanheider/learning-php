<?php 
    setcookie('name', 'João', time() + 3600);
    if(isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá, mundo!</h1>
    <?php if($name !== ''):?>
        <h2>Seja bem-vindo <?=$name?></h2>
    <?php endif;?>
</body>
</html>