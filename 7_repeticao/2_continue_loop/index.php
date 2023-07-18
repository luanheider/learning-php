<?php 
//decrementar também e antes do continue;
    $a = 10;
    while($a > 0) {
        if($a == 5 || $a == 7) {
            echo "pulou $a <br>";
            $a--;
            continue;
        }
        if($a == 2) {
            break;
        }
        echo "loop $a <br>";
        $a--;
    }
?>