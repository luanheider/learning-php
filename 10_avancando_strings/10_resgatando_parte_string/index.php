<?php 
    // String pai -> índice inicial -> comprimento a pegar
    $string = "Teclado";
    $substr = substr($string, 0, 2);
    echo $substr;

    echo "<br>";
    echo substr($string, 1, strlen($string) -1);
    echo "<br>";
    echo substr($string, 1, -2);
    echo "<br>";

    //começa do 1 e pega 3
    echo substr($string,1, 3);
?>