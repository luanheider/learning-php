<?php 
    function checkIsEvenOrOdd($number){
        if($number % 2 === 0) {
            return "O $number é PAR";
        } else {
            return "O $number é IMPAR";
        }
    }

    $result = checkIsEvenOrOdd(10);
    echo $result;
    echo "<br>";
    $result2 = checkIsEvenOrOdd(11);
    echo $result2;
    echo "<br>";
    
    function squad($n) {
        $result = $n ** 2;
        return $result;
    }
    echo squad(5);
    
?>