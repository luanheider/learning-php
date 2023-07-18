<?php 

    // for($i = 0; $i < 10; $i++) {
    //     if($i % 2 == 0) {
    //         echo "$i é par <br>";
    //     } else {
    //         echo "$i<br>";
    //     }
    // }

    // $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 16, 17, 18, 19, 20];

    // for($i = 0; $i < count($arr); $i++) {
    //     $actual = $arr[$i];
    //     if($actual % 2 == 0) {
    //         echo "$actual<br>";
    //     }
    // }

//    $arr = [];
//    for($i = 1; $i <= 10; $i++) {
//     array_push($arr, $i);
//    }
//    print_r($arr);
//    echo "<br>";
//    print_r(array_pop($arr));

$arr = [];
for($i = 10; $i <= 20; $i++) {
    array_push($arr, $i);
}
print_r($arr);
echo "<br>";
for($i = 0; $i < count($arr); $i++) {
    $actual = $arr[$i];
    if($actual % 2 != 0) {
        echo "Só impares: $actual <br>";
    }
}

?>