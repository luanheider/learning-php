<?php 
    // date_default_timezone_set("America/Sao_Paulo");
    // echo "Hoje é dia ". date("d/M/Y");
    // echo "Hora atual: ". date("G:i:s");
    $isToday = date("d/m/y");
    echo $isToday;
    echo "<br>";

    $hr = date("G:i:s");
    echo $hr;
    echo "<br>";

    $dayOfWeek = date("D/M - Y");
    //$dayOfWeek = date("d/M - Y");
    echo $dayOfWeek;
    echo "<br>";

    

?>