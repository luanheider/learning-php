<?php 
    $validation = [];
    if(count($_POST) > 0) {
        if($_POST['name'] === '') {
            $validation[] = 'Preencha o nome de usuário';
        }
        if($_POST['email'] === '') {
            $validation[] = 'Preencha o email de usuário';
        }
        if($_POST['password'] !==  $_POST['confirmation']){
            $validation[] = 'As senhas precisam ser iguais';
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($validation) > 0):?>
        <ul>
            <?php foreach($validation as $validate):?>
                <li><?=$validate?></li>
            <?php endforeach;?>
        </ul>    
    <?php endif;?>
    <form action="index.php" method="POST">
        <div>
            <label for="name">Nome:</label><br>
            <input type="text" name="name" placeholder="digite seu nome" id="name" required>
        </div>
        <div>
        <label for="email">E-mail:</label><br>
            <input type="email" name="email" placeholder="digite seu email" id="email" required>
        </div>
        <div>
        <label for="password">Senha:</label><br>
            <input type="password" name="password" placeholder="digite sua senha" id="password" required>
        </div>
        <div>
        <label for="confirmation">Confirme sua senha:</label><br>
            <input type="password" name="confirmation" placeholder="digite sua senha novamente" id="confirmation" required>
        </div><br>
        <input type="submit">
    </form>
</body>
</html>