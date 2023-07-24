<?php 
    // explode verter string para array
    $sentence = "Testando método explode";
    $newArray = explode(" ", $sentence);
    print_r($newArray);

    echo "<br>";
    $newString = implode(" ", $newArray);
    echo $newString;

?>