<?php 
    $arr = [5, 6, 7, 8, 9, 10, 11];

    function numbersGreaterThan7($arr) {
        $greaterThan7 = [];

        // foreach($arr as $item) {
        //     if($item > 7) {
        //         array_push($greaterThan7, $item);
        //     }
        // }
            for($j = 0; $j < count($arr); $j++) {
                if($arr[$j] > 7) {
                    array_push($greaterThan7, $arr[$j]);
                }
            }

        return $greaterThan7;
    }

    $resultNumbersGreaterThan7 = numbersGreaterThan7($arr);
    print_r ($resultNumbersGreaterThan7);
    echo "<br>";
    //print_r($resultNumbersGreaterThan7[0]);

?>