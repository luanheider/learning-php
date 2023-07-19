<?php 
    function showData($name, $price) {
        $name = "Nome: ".$name;
        $price = "Valor: ".$price;

        return [$name, $price];
    }
    
    $data = showData("Teclado", 99);
    
    print_r($data);
    echo "<br>";
    
    echo $data[0];
    echo "<br>";
    echo $data[1];
?>