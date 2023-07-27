<?php
    $person = ["Luan", 33, "Developer"];

    //parecido com destructuring em js, mas utiliza uma função list para isso;
    list($name, $age, $position) = $person;

    echo $name;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $position;
    echo "<br>";

?>