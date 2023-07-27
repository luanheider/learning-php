<?php 
    //Altera o array original, então podemos colocar o retorno em uma variável
    $items = ["Barcelona", "Real Madrid", "Atlético de Madrid", "Benfica"];

    $getRandomIndex = array_rand($items);
    
    echo $items[$getRandomIndex];
    
?>