<?php 
    //strtotime recebe uma string como params e tenta transformar em data
    $addFiveDays = strtotime("5 days");
    $addOneYear = strtotime("1 year");
    $addOneMonth = strtotime("1 month");

    $changeDate = date("d/m/y", $addFiveDays);
    echo $changeDate;

    echo "<br>";
    echo date("5 days");
?>