<?php 
    $n = [1, 2, 3, 4];

    function sum($x, $y) {
        return $x + $y;
    }

    $result = array_reduce($n, "sum");
    echo $result;

?>