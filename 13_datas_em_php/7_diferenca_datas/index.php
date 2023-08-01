<?php 
    //diff permite verificar a diferença entre duas datas

    $dateA = new DateTime();
    $dateB = new DateTime();

    $dateA->setDate(1990, 04, 24);
    print_r($dateA);
    echo "<br>";
    print_r($dateB);
    echo "<br>";

    $diference = $dateA->diff($dateB);
    print_r($diference);
    echo "<br>";
    echo $diference->format("%a days");

?>