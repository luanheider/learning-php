<?php 
    //session -> persiste dados do usuário na sistema, persiste enquanto navega entre páginas
    //mantém salvo os itens adicionados no carrinho, mantém a autenticação do usuário no sistema
    //session utilizado para coisas mais sérias que não pode falhar;

    session_start();
    //print_r($_SESSION);
    $_SESSION['name'] = "Luan";
    //print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá, session!</h1>
</body>
</html>