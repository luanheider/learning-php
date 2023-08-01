<?php 
    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataA->setDate(1990, 04, 24);

    if($dataA > $dataB) {
        echo "Maior";
    } else {
        echo "Menor";
    }
?>