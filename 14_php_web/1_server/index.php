<?php 
    print_r($_SERVER);
    echo "<br>";
    $address = $_SERVER['SCRIPT_FILENAME'];
    echo $address;
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";

    if($_SERVER['SERVER_NAME'] === 'localhost') {
        echo "Usuário está acessando local host.";
    }

?>