<?php 
    //remover elementos com splice
    // array, a partir de índice remove tanto...

    $arr = range(1, 5);
    print_r($arr);
    echo "<br>";

    $removedItem = array_splice($arr, 0, 2);
    print_r($removedItem);
    echo "<br>";

    $items = ["batata", "maçã", "pera", "feijão", "arroz"];

    $items = array_splice($items, 2, 2);
    print_r($items);


?>