<?php 
    //interface implements -> modelo de definição de uma classe, 
    // tudo que está definido na interface, será obrigatoriamente implementado na classe herdeira
    //posso adicionar constantes nas interfaces, só acessa as const concatenando
    interface Model {
        public function speak();
        const name = "Luan";
    }

    class Human implements Model {
        public $age = 33;
        public function speak() {
            echo "Falou!<br>";
        }
        public function sayHelloTo() {
            echo "Meu nome é: ".self::name;
        }
    }

    $p1 = new Human();
    $p1->speak();
    $p1->sayHelloTo();

?>