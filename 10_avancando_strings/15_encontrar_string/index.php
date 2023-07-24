<?php 
    //strpos -> encontra o índice da primeira ocorrência da string passada
    // para ser encontrada;
    // se for false, é pq não tem

    $sentence = "Utilizando método strpos para encontrar string";
    $search = strpos($sentence, "strpos");

    if($search) {
        echo $search;
    } else {
        echo "Não encontrada";
    }
?>