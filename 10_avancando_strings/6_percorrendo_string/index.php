<?php 
    $word = "Teclado";
    $reverseWord = [];
    for($i = strlen($word) - 1 ; $i >= 0 ; $i--) {
        array_push($reverseWord, $word[$i]);
    }
    //array
    print_r($reverseWord);
    echo "<br>";
    //word reverse
    $result = implode("", $reverseWord);
    echo $result;


    echo "<br>";
    //utilizando strrev
    $name = "Luan";
    echo strrev($name);
?>