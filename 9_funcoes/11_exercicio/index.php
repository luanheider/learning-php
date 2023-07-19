<?php
    $products = ["Pães", "Ovos", "Bolacha", "Biscoito"];

    function returnItemsAsString($arr) {
        //return strtolower(implode(",", $arr));
        $asString = implode(",", $arr);
        $toLowerCase = strtolower($asString);

        return $toLowerCase;
    }

   echo returnItemsAsString($products);

?>