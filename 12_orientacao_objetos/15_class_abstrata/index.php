<?php 
    //não pode ser instanciadas, tem que implementar os métodos e propriedades na hr de herdar
    //utiliza :: para acessar método da classe abstract
    // declaro tb método abstrato, e tenho que usar na classe q herda
    
    abstract class Test {
        public static function someThing() {
            echo "Testando classe abstrata e método estático<br>";
        }
        abstract public function metodoAbistrato();
    }

    Test::someThing();

    class Nova extends Test {
         public function metodoAbistrato() {
            echo "Teste método abs";
        }
    }

    $obj = new Nova();
    $obj->metodoAbistrato();