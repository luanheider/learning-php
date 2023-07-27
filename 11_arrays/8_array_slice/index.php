<?php 
    $info = ["Luan", 33, "Developer", "PHP", "JAVA"];
    //primeiro índice o array, segundo a partir de onde quero pegar e terceiro params até onde

    $slice = array_slice($info, 0, count($info));
    $slice2 = array_slice($info, 2, 3);
    print_r( $slice);
    echo "<br>";
    print_r( $slice2);

?>