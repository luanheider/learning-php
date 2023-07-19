<?php 
    $varGlobal = 10;
    $varGlobalNaFuncao = 30;
    $c = 5;

    function escopo() {
        $varLocal = 20;
        echo $varLocal;
        
        global $varGlobalNaFuncao;
        echo "<br>";
        echo $varGlobalNaFuncao;

        static $c = 5;
        $c++;
        echo "<br>";
        echo "invocação da função com a static = $c";
    }
    escopo();
    echo "<br>";
    echo $varGlobal;
    echo "<br>";
    escopo();
    //na variável static o valor vai ser incrementado e na chamada 
    //novamente da função, ele vai deixar o valor salvo na memoria e incrementar novamente
    echo "<br>";
    echo $c;
?>