<?php 
   $mat = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
   ];

   for($i = 0; $i < count($mat); $i++) {
    echo "Imprimindo dados do array: ".($i+1)."<br>";
        for($j = 0; $j < count($mat[$i]); $j++) {
            echo $mat[$i][$j]."<br>"; 
        }

   }

?>