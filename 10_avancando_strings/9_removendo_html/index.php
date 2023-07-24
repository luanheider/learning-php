<?php 
    //strip_tags -> remover tag html de dados por ex que vao pagar o banco de dados
    
    $infoWithTagsHtml = "<p>Eu sou um parágrafo</p><div>Eu sou uma div</div>";
    echo $infoWithTagsHtml;
    echo "<br>";
    
    $salveToBank = strip_tags($infoWithTagsHtml);
    echo $salveToBank;
?>