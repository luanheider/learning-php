<?php 
    //cria variáveis com as chaves do arr, quase um destructuring, se já existe a chave ela sobrescreve

    $arr = [
        "name" => "Luan",
        "age" => 33,
        "position" => "Developer"
    ];

    extract($arr);
    echo $name;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $position;

?>