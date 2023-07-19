<?php 
    function sum($a, $b = 2) {
        return $a + $b;
    }

    echo sum(2);
    echo "<br>";
    echo sum(2, 3);
    echo "<br>";

    function greeting($name, $surname = "Silva") {
        return $name . " ". $surname;
    }

    echo greeting("Mario");
    echo "<br>";
    echo greeting("Mario", "Cardoso");


?>