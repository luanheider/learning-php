<?php
   $number = 10;
   if(is_int($number)) {
    echo "$number: é um inteiro";
   }
   echo "<br>";
   $number2 = "text";
   if(is_int($number2)) {
    echo "$number2: é um inteiro";
   } else {
    echo "$number2: não é um inteiro";
   }
   echo "<br>";

   function checkIsInteger($value) {
    if(is_int($value)) {
        echo "$value: é um inteiro";
    } else {
        echo "$value: não é um inteiro";
    }
   }
   checkIsInteger(100);
   echo "<br>";
   checkIsInteger("texto");
?>