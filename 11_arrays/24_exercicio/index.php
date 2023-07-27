<?php 
    $numbers = [10, 4, 30, 55];
    function greaterElement($arr) {
        $item = $arr[0];
        
        foreach($arr as $n) {
            if($n > $item) {
                $item = $n;
            }
        }

        return $item;

    }

    $result = greaterElement($numbers);
    echo $result;

?>