<?php 
    //mostra os items diferentes
    //a ordem dos arrays passados como params IMPORTA, pq ele vai ver apenas tudo q tem no primeiro array que não tem no segundo

    $n = [1, 2, 3, 4];
    $n2 = [1, 2, 3, 4, 5, 6];

    $diff = array_diff($n2, $n);

    print_r($diff);

?>