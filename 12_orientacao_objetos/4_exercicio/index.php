<?php 
    class Dog {
        function bark() {
            echo "Au Au Au!<br>";
        }
        function walking($m) {
            echo "Caminhando por $m metros.<br>";
        }
    }

    $flipe = new Dog();
    $flipe->bark();
    $flipe->walking(30);
    $belinha = new Dog();
    $belinha->bark();
    $belinha->walking(40);

?>