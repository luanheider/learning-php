<?php 
    $a = 5;
    $b = 2;
    $c = $a / $b;

    echo $c;
    //dois inteiros que gerou um float;
    echo "<br>";
    if(is_float($c)) {
        echo "Gerou um float <br>";
    }
    if(is_string(1 . 3)) {
        echo "é uma string <br>";
    }

    $name = "Luan";
    $surname = "Heidercheidt";

    $fullName = $name." ".$surname;
    echo $fullName;

    echo "<br>";
    $op = "5" * 12;
    echo $op;
    echo "<br>";
    echo gettype($op);
    echo "<br>";
    echo gettype([]);
?>