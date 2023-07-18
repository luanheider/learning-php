<?php 
    if(10 < 20 && 2 < 5) {
        echo "True && <br>";
    } else {
        echo "False";
    }
    if(10 < 20 || 2 > 5) {
        echo "True || <br>";
    } else {
        echo "False";
    }
    echo "<br>";

    $x = (float) "5.555";
    $b = (int) 2.5;
    echo $x;
    echo "<br>";

    if(is_float($x)) {
        echo "Casting true";
    }
    echo "<br>";
    if(is_int($b)) {
        echo "Casting em 2.5 para int true <br>";
        echo $b;
    }
    echo "<br>";

    // ternário
    $number1 = 5;
    $number2 = 2;
    $result = $number1 > $number2 ? "true $number1 > $number2" : "false $number1 < $number2";
    echo $result;

?>