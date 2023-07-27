<?php 
    $arr = range(1, 20);
    print_r(array_chunk($arr, 4));
    echo "<br>";
    $matriz = array_chunk($arr, 10);
    print_r($matriz[0]);
    echo "<br>";
    echo "<br>";

    for($i = 0; $i < count($matriz); $i++) {
        for($j = 0; $j < count($matriz[$i]); $j++) {
            print_r($matriz[$i][$j]);
        }
    }

?>