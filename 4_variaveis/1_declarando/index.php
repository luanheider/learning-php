<?php 
    $name= "Luan";
    $name = "Mario"; 
    echo $name;
    echo "<br>";
    $name = 10;
    echo $name;
    echo "<br>";

    $_surname = "Heidercheidt";
    echo $_surname;
    echo "<br>";
    echo "<p>$name";
    echo "<br>";
    
    $camelCase = "Camel Case";
    echo $camelCase;
    echo "<br>";
   $items = ['roda' => 4, 'porta' => 2, 'color' => 'red'];
    
   print_r ($items);
   echo "<br>";
   echo $items['color'];
   echo "<br>";

   $x = 10;
   $y = 10;
   $result = $x + $y;
   echo $result;
   echo "<br>";

   //variável de variável
   //dessa forma $teste passa a ser uma variável
   $x = "teste";
   $$x = 5;
   echo $teste;
   echo "<br>";

   //variável por referencia, pega endereço de memória igual em C;
    $x = 2;
    $y = &$x;
    echo $y;
    echo "<br>";
    $y = 10;
    echo $x;
?>