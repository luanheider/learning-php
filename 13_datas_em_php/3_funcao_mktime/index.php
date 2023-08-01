<?php 
    //recebe em seus params, hr, min, seg, mês, dia e ano para formatar uma data
    $date = mktime(01, 12, 33, 04, 24, 1990);
    echo "Times temp segundos: $date";
    echo "<br>";
    echo date("d/m/y", $date);

?>