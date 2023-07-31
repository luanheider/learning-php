<?php 
    class Person {
        public function speak() {
            echo "Hello<br>";
        }
    }

    $p1 = new Person();

    if($p1 instanceof Person) {
        echo "p1 é instância de Person<br>";
    } else {
        echo "Não é instância de classe<br>";
    }

    class Person2 {

    }
    $p2 = new Person2();
    if($p2 instanceof Person) {
        echo "p1 é instância de Person<br>";
    } else {
        echo "Não é instância de classe<br>";
    }
    if($p2 instanceof Person2) {
        echo "p2 é instância de Person<br>";
    } else {
        echo "Não é instância de classe<br>";
    }

?>