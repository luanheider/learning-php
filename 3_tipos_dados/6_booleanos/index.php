<?php 
    function checkIsBoolean($value1, $value2) {
        if($value1 > $value2) {
            echo "true: $value1 maior que $value2";
        } else {
            echo "false: $value1 menor que $value2";
        }
    }
    checkIsBoolean(10, 20);
    echo "<br>";
    checkIsBoolean(30, 20);
    echo "<br>";
    echo true;
    echo "<br>";
    echo false;
    echo "<br>";

    $podeEntrar = true;
    if($podeEntrar) {
        echo "true: pode entrar";
    }
    echo "<br>";
    $isBoolean = true;
    if(is_bool($isBoolean)) {
        echo "$isBoolean: valor bool";
    }
    echo "<br>";
    $isBoolean2 = 10;
    if(is_bool($isBoolean2)) {
        echo "valor bool";
    }
    echo "<br>";
    if(is_bool(0 == false)) {
        echo "0 é false";
    }
    echo "<br>";
    if(is_bool(0 === false)) {
        echo "0 é false";
    }
    echo "<br>";
    $a = 1;
    $b = '1';
    echo $a == $b; 
    echo $a === $b;
?>