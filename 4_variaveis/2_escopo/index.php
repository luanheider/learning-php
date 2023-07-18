<?php 
    //global
    $name = "José";

    function showName() {
        //local
        $name = "Luan";
        echo $name;
    }
    showName();
    echo "<br>";
    echo $name;
    echo "<br>";

    //var como params
    function showName2($name) {
        echo $name;
    }
    showName2($name);
    echo "<br>";
    
    //var static mantém seu valor e não é resetado na função;
    function teste() {
        static $a = 0;
        $a++;
        echo "$a <br>";
    }
    teste();
    teste();
    teste();
?>