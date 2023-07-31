<?php 
    // herança utilizando use classe, deixa mais 'limpo o código'

    trait Objeto {
        public function teste() {
            echo "Testando trait de obj <br>";
        }
    }

    class Central {
        use Objeto;
    }

    $obj1 = new Central();
    $obj1->teste();

?>