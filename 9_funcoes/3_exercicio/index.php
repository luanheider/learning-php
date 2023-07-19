<?php 
    function multiplication() {
        $a = 2;
        $b = 2;
        $c = 2;
        return $a * $b * $c;
    }

    $result = multiplication();
    echo $result;
    echo "<br>";

    $arr = [1, 2, 3];
    function multiplication2($arr) {
        return array_product($arr);
    }
    $result2 = multiplication2($arr);
    echo $result2;
    echo "<br>";

?>