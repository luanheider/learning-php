<?php 
    $date = new DateTime();
    print_r($date);
    echo "<br>";
    $date->setDate(1990, 04, 24);
    print_r( $date);
    echo "<br>";

    print_r($date->setTime(05, 12, 30));
?>