<?php
    $x = 5.99;
    $y = 6.99;
    $z = 10;
    $b = "Teste";

    function checkIsFloat($value) {
        if(is_float($value)) {
            echo "$value: é um float";
        } else {
            echo "$value: não é um float";
        }
    }
    checkIsFloat($x);
    echo "<br>";
    checkIsFloat($y);
    echo "<br>";
    checkIsFloat($z);
    echo "<br>";
    checkIsFloat($b);
?>