<?php 
    $data = [];
    $data[0] = 1;
    $data[1] = 2;
    $data[2] = 3;
    $data[] = 4;

    print_r($data);

    echo "<br>";
    echo gettype($data);
    echo "<br>";

    $arrayAssoc = ["carro" => "BMW", "cor" => "branco", "motor" => "3.0"];
    print_r($arrayAssoc);
    echo "<br>";
    echo $arrayAssoc["motor"];

    echo "<br>";

    //função range -> cria o array rapidamente
    $arr = range(1, 10);
    print_r($arr);
    echo "<br>";

    foreach($arr as $item) {
        if($item % 2 === 0) {
            echo " $item é par";
        }
    }

    echo "<br>";
    //adicionando step ao array
        //inicial -> até -> de       
    $arr2 = range(0, 1000, 100);
    print_r($arr2);

    echo "<br>";

?>