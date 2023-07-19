<?php 
    function firstFunction($msg) {
       return $msg;
    }
    $showMessage = firstFunction("Olá, mundo!");
    echo $showMessage;

    echo "<br>";

    function sum($a, $b) {
        return $a + $b;
    }

    $result = sum(3, 2);
    echo $result;

    echo "<br>";

    $arr = [1, 2, 3, 4, 5];
    print_r($arr);
    echo "<br>";
    
    $resultSum = array_sum($arr); 
    echo $resultSum;

    echo "<br>";
    echo array_product($arr);
    echo "<br>";

    echo strtoupper("caixa alta");
    echo "<br>";
    echo strtolower("caixa baixa");
    echo "<br>";
    

?>