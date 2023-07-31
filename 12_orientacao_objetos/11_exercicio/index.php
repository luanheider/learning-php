<?php 
    class Human {
        public $bracos = 2;

        public function sayHello() {
            echo "Hello! <br>";
        }
    }

    class Prof extends Human{

    }

    $p1 = new Prof();
    echo $p1->bracos."<br>";
    $p1->sayHello();
?>