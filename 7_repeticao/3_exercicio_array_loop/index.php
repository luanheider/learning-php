<?php 
    $numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $i = 0;
    while($i < count($numbers)) {
        $actual = $numbers[$i];
        
        if($actual == 30 || $actual == 40) {
            $i++;
            continue;
        }
        
        echo "$actual ";

        $i++;
    }


?>