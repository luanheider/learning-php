<?php 
    //const letras maiúsculas e snake_case, acessa por ::
        //para acessar constantes dentro do método utiliza 
        //self::NOME_AQUI -> troca o this pelo self e -> pelos ::
    class Humano {
        public const BRACOS = 2;
        public const PERNAS = 2;
        public const OLHOS = 2;

        function getQuantidadeBracos() {
            echo self::BRACOS;
        }


    }
    $luan = new Humano();
    echo $luan::BRACOS;
    echo "<br>";
    echo $luan::PERNAS;
    echo "<br>";
    echo $luan::OLHOS;
    echo "<br>";

    $luan->getQuantidadeBracos();

?>