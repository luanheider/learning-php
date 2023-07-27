<?php 
    $n = [2, 3, 5, 1, 4];

    //altera o array original, então não precisa criar uma var para retorno
    sort($n);
    print_r($n);
    echo "<br>";

    rsort($n);
    print_r($n);
    

    //ordenando arr associativo
    echo "<br>";
    echo "<br>";
    //asort -> arsort
    $arr = [
        "luan" => 5,
        "jose" => 4,
        "lucas" => 2,
        "joao" => 1
    ];

    asort($arr);
    print_r($arr);
    echo "<br>";
    echo "<br>";
    arsort($arr);
    print_r($arr);
?>