<?php 
    $soma = 5 + 5;
    echo $soma ."<br>";
    $subtracao = 5 - 5;
    echo $subtracao ."<br>";
    $divisao = 5 / 5;
    echo $divisao ."<br>";
    $multiplicacao = 5 * 5;
    echo $multiplicacao ."<br>";
    $mod = 5 % 5;
    echo $mod ."<br>";

   
    function checkIsEven($value) {
        return $value % 2 != 0;
    }

    $even = checkIsEven(11);
    if($even) {
        echo "Impar";
    } else {
        echo "Par";
    }

    echo "<br>";
    echo 5 ** 2;
    echo "<br>";
    $name = "Luan";
    $surname = "Heidercheidt";
    $fullName = $name." ".$surname;
    echo $fullName;
    echo "<br>";

    $x = 0;
    $x++;
    echo $x;
    echo "<br>";
    $n = 10;
    $n--;
    echo $n;

    echo "<br>";
    $a = 1;
    $b = "1";

    echo $a == $b;
    echo "<br>==";
    echo $a === $b;
    echo "<br>";

?>