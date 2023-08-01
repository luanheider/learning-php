<?php 
     $date = new DateTime();
     
     echo $date->format("d/m/y")."<br>";
     echo $date->format("d - M - Y")."<br>";

     //utilizar format após modify pq guarda no obj a data modificada
     $date->modify("+5 days");
     echo $date->format("d/m/y")."<br>";
?>