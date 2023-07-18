<?php 
    $age = 18;
    if($age >= 18) {
        echo "Maior de idade";
    } else {
        echo "Menor de idade";
    }

    $matheus = "Matheus";
    $pedro = "Pedro";
    echo "<br>";

    if($matheus != $pedro) {
        echo "Diferente";
    }
    echo "<br>";

    if(true) {
        if(5 > 1) {
            echo "If aninhado";
        }
    }
    echo "<br>";

    $number3 = 10;
    if(is_int($number3)) {
        if($number3 > 1) {
            echo "true true";
        }
    }
?>