<?php 
    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];

    $merge = array_merge($arr1, $arr2);
    print_r($merge);

    echo "<br>";
    $names1 = ["Paula", "Maria"];
    $names2 = ["Dark", "Joana"];

    $merge2 = array_merge($names1, $names2);
    print_r($merge2);
?>