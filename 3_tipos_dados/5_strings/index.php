<?php 
    $x = "Nome";
    $y = 10;

    function checkIsString($value) {
        if(is_string($value)) {
            echo "$value: é uma 'string'";
        } else {
            echo "$value: não é uma 'string'";
        }
    }

    checkIsString($x);
    echo "<br>";
    checkIsString($y);
?>