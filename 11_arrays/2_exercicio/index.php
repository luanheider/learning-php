<?php 
    
    $arr = range(10, 45);

    // foreach($arr as $item) {
    //     $sum = 0;
    //     $sum += $item + 6;

    //     if($sum > 30) {
    //         echo "$sum muito alto<br>";
    //     } else {
    //         echo "$sum <br>";
    //     }
    // }

    for($i = 0; $i < count($arr); $i++) {
        $sum = 0;
        $sum += $arr[$i] + 6;

        if($sum > 30) {
            echo "$sum muito alto <br>";
        } else {
            echo "$sum <br>";
        }
    }

?>