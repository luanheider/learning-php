<?php 
    //func_get_args -> retorna uma lista array com os argumentos de uma função
    //func_num_args -> retorna o número de argumentos de uma função
    
    function data($name, $age) {
        print_r(func_get_args());
        echo "<br>";
        echo func_num_args();

        return $name . " " . $age;
    }

    data("Luan", 33);

?>