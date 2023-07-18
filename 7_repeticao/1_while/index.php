<?php 
    $op = 10;

    // while($op > 0) {
    //     echo "$op ";
    //     if($op % 2 == 0) {
    //         echo "é par. ";
    //     } else {
    //         echo "é impar. ";
    //     }
    //     $op--;
    // }
// echo "<br>";
//     while($op > 0) {
//         echo "$op<br>";
//         if($op == 3) {
//             break;
//         }
//         $op--;
//     }
//     echo "Parou $op";
    // $limit = 30;
    // $initial = 4;
    // while($initial < $limit) {
    //     if($initial == 24) {
    //         break;
    //     }
    //     echo "$initial ";
    //     $initial += 2;
    // }
    $count = 1;
    while($count <= 10) {
        echo "loop externo $count <br>";
        $j = 1;
        while($j <= 3) {
            echo "interno $j <br>";
            $k = 1;
            while($k <= 3) {
                echo "interno_interno $k<br>";
                $k++;
            }
            $j++;
        }
        
        $count++;
    }
?>