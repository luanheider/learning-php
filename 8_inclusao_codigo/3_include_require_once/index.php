<?php 
    //funcionam da mesma maneira, mas impedem que um mesmo
    
    //-> Dessa forma como abaixo ele mostra duas vezes o arquivo
    //mas com o once, apenas uma vez
    //arquivo seja adicionado mais de uma vez na página
    // require __DIR__."../../2_require/arquivos/testando.php";
    // require __DIR__."../../2_require/arquivos/testando.php";
    
    require_once __DIR__."../../2_require/arquivos/testando.php";
    require_once __DIR__."../../2_require/arquivos/testando.php";
?>