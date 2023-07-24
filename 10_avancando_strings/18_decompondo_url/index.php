<?php 
    //parse_url -> recebemos um array com todas as partes que a URL tem;
    $url = "https://www.google.com";
    $arrayUrl = parse_url($url);
    print_r($arrayUrl);
    echo "<br>";

    $host = $arrayUrl["host"];
    echo $host;
    echo "<br>";
    $protocol = $arrayUrl["scheme"];
    echo $protocol;
    echo "<br>";

    $url2 = "http://www.horadecodar.com.br/?busca=php";
    $arrayUrl2 = parse_url($url2);
    print_r($arrayUrl2);

    echo "<br>";

    $url3 = "http://www.horadecodar.com.br/usuarios/luanheider?id=33&nome=Luan";
    $arrayUrl3 = parse_url($url3);
    print_r($arrayUrl3);
?>