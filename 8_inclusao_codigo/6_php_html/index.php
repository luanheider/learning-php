<?php 
    include_once "backend.php";
?>
<header>
    <h1>Bem vindo ao nosso site</h1>
</header>

<p><?=$name;?> veja nossas melhores ofertas!</p>

<ul>
    <?php foreach($products as $product): ?>
        <li><?=$product; ?></li>
    <?php endforeach?>
</ul>