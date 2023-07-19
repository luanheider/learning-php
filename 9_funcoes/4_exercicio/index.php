<?php 
    function returnFullName($name, $surname) {
        return $name." ".$surname;
    }

    $fullName = returnFullName("Luan", "Heidercheidt");
    echo $fullName;
    echo "<br>";

    
    function apresentation($name, $age) {
        return "Olá, meu nome é $name e tenho $age anos!";
    }

    $data = apresentation("Luan", 33);
    echo $data;
    echo "<br>";

?>