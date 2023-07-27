<?php 
    $numbers = range(1, 5);

    foreach($numbers as $item) {
        echo $item." ";
    }

    //imprimindo tb a chave
    $person = [
        "name" => "Luan",
        "age" => 33,
        "position" => "Developer"
    ];

    foreach($person as $key => $value){
        echo " $key => $value";
    }

?>