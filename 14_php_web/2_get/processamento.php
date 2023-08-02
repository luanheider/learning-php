<?php 
    if(isset($_GET['name'])) {
        $name = $_GET["name"];
        $age = $_GET["age"];
    } else {
        $name = 'Padrão';
        $age = 'Padrão';
    }

?>
<h2>Seu nome é <?= $name?></h2>
<h3>Idade: <?= $age?></h3>