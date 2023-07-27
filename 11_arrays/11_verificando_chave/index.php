<?php 
    $arr = ["nome" => "Luan", "age" => 33, "position" => "Developer"];

    print_r(array_keys($arr));
    echo "<br>";
    print_r(array_values($arr));
    echo "<br>";

    //verificando se chave existe
    $key = "language";
    // $isExist = array_key_exists($key, $arr);
    // if($isExist) {
    //     echo "ok<br>";
    //     echo $arr["nome"];
    // } else {
    //     echo "chave inexistente <br>";
    //     $arr[$key] = "php";
    //     echo $arr[$key];
    // }
    echo "<br>";
    print_r($arr);
    echo "<br>";

    //VERIFICANDO COM ISSET
    if(isset($arr[$key])) {
        echo "ok<br>";
        echo $arr[$key];
    } else {
        echo "chave inexistente <br>";
        $arr[$key] = "php";
        echo $arr[$key];
    }

?>