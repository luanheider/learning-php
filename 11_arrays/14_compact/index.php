<?php 
    // compact -> cria array a partir de variável passadas como string
    $name = "Luan";
    $age = 33;
    $position = "Developer";
    $isWorking = true;

    $newArray = compact("name", "age", "position", "isWorking");
    print_r($newArray);


?>